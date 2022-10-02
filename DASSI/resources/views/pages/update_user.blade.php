@extends('layouts.app', ['activePage' => 'update-user', 'titlePage' => __('Modify auditor')])

@section ('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
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

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with the Submit <br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
        <div> 
        <form  action="{{action('UserController@UpdateUser' ,$users->id)}}" method="POST">
 <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
{{ method_field('POST') }}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title "> Modify User : </h4>
</div>
         <div class="col-md-12">
                    <label for="Lastname" class="font-weight-bold">Firstame : </label>
                    <input type="text"
                      class="form-control pl-5"  name="Firstname" id="Firstname" aria-describedby="helpIdFirstname" value="{{$users->firstname}}">
                   
                  </div>
                  <div class="col-md-12">
                    <label for="Firstname" class="font-weight-bold">Lastname : </label>
                    <input type="text"
                      class="form-control pl-5"  name="Lastname" id="Lastname" aria-describedby="helpIdLastname" value="{{$users->lastname}}">
                   
                  </div>
                  <div class="col-md-12">
                    <label for="Email" class="font-weight-bold">Email :</label>
                    <input type="email"
                      class="form-control pl-5" name="Email" id="Email" aria-describedby="helpIdEmail" value="{{$users->email}}">
                    
                  </div>
         
                  <div class="col-md-12">
                      <label for="Role" class="font-weight-bold">Role :</label>
                      <select class="form-control"  name="Role" id="Role" value="{{$users->role}}">
                        <option >
                          User
                        </option>
                        <option>
                          Admin
                        </option>
                      </select>
                    </div>
          
                             <button type="submit" class="btn btn-block btn-primary">Modify</button>
        </form>
      </div>
    </div>
  </div>
</div>
     
               
@endsection