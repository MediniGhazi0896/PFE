@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{action('UserController@updateInfo')}}" method="POST" autocomplete="off" class="form-horizontal">
            @csrf
            @method('POST')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit my Profile') }}</h4>
                <p class="card-category">{{ __('My Informations') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif



                <div class="row">
                  <label class="col-sm-2 col-form-label">Firstname</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Firstname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Firstname') ? ' is-invalid' : '' }}" name="Firstname" id="Firstname" type="text" placeholder="{{ __('Firstname') }}" value="{{ old('firstname', auth()->user()->firstname) }}" required="true" aria-required="true"/>
                      @if ($errors->has('Firstname'))
                        <span id="Firstname-error" class="error text-danger" for="Firstname">{{ $errors->first('Firstname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Lastname</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Lastname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Lastname') ? ' is-invalid' : '' }}" name="Lastname" id="Lastname" type="text" placeholder="{{ __('Lastname') }}" value="{{ old('lastname', auth()->user()->lastname) }}" required="true" aria-required="true"/>
                      @if ($errors->has('Lastname'))
                        <span id="Lastname-error" class="error text-danger" for="Lastname">{{ $errors->first('Lastname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Username </label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Name') ? ' is-invalid' : '' }}" name="Name" id="Name" type="text" placeholder="Username" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('Name'))
                        <span id="Name-error" class="error text-danger" for="Name">{{ $errors->first('Name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Displayname</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Displayname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Displayname') ? ' is-invalid' : '' }}" name="Displayname" id="Displayname" type="text" placeholder="{{ __('Pseudo') }}" value="{{ old('displayname', auth()->user()->displayname) }}" required="true" aria-required="true"/>
                      @if ($errors->has('Displayname'))
                        <span id="Displayname-error" class="error text-danger" for="Displayname">{{ $errors->first('Displayname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('Email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" name="Email" id="Email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                        @if ($errors->has('Email'))
                          <span id="Email-error" class="error text-danger" for="Email">This Email is allready used by another user </span>
                        @endif
                      </div>
                    </div>
                  </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{action('UserController@updatePasswd')}}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change Password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Actual Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Actual Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">Wrong Password</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">This Field Is Required </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" value="" required />
                      @if ($errors->has('password_confirmation'))
                        <span id="password_confirmation-error" class="error text-danger" for="input-assword-confirmation"> Passwords do not match </span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            <div class="card-footer ml-auto mr-auto" align="center"> 
                <button type="submit" class="btn btn-primary">{{ __('Change') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
