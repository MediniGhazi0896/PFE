@extends('layouts.app', ['activePage' => 'confirm', 'titlePage' => __('Add User')])

@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
          <form action="{{action('UserController@confirm')}}" method="post">
            @csrf
        <div class="card">
          <div class=" bg-azure card-header card-header-primary  bg-azure">
            <h4 class="card-title ">Information Generales</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <div class="form-group mt-3">
                  <label for="LastName" class="font-weight-bold">Name : </label>
                  <input type="text"
                    class="form-control pl-5" required name="Lastname" value="{{$user->lastname}}" id="Lastname" aria-describedby="helpIdFirstname" placeholder="Nom">
                  <small id="helpIdFirstname" class="form-text text-muted">Saisir le nom</small>
                </div>
                <div class="form-group mt-3">
                  <label for="Firstname" class="font-weight-bold">Prénom:</label>
                  <input type="text"
                    class="form-control pl-5" required name="Firstname" value="{{$user->firstname}}" id="Firstname" aria-describedby="helpIdFirstname" placeholder="Prénom">
                  <small id="helpIdFirstname" class="form-text text-muted">Saisir le prénom</small>
                </div>
                <div class="form-group mt-3">
                  <label for="DisplayName" class="font-weight-bold">Pseudo: </label>
                  <input type="text"
                    class="form-control pl-5" required value="{{$user->lastname}} {{$user->firstname}}" name="DisplayName" id="DisplayName" aria-describedby="helpIdFirstname" placeholder="Pseudo">
                  <small id="helpIdFirstname" class="form-text text-muted">Saisir le pseudo</small>
                </div>
            </div>
          </div>
        </div>
        <div class="card">
            <div class=" bg-azure card-header card-header-primary  bg-azure">
              <h4 class="card-title ">Informations d&#39;authentification</h4>
            </div>
            <div class="card-body">
                <div class="form-group mt-3">
                  <label for="Username" class="font-weight-bold">Nom d&#39;utilisteur:</label>
                  <input type="text"
                    class="form-control pl-5" value="{{$user->lastname}} {{$user->firstname}}" required name="Username" id="Username" aria-describedby="helpIdFirstname" placeholder="Nom d&#39;utilisteur">
                  <small id="helpIdFirstname" class="form-text text-muted">Saisir le nom d&#39;utilisteur</small>
                </div>
                <div class="form-group mt-3">
                  <label for="Email" class="font-weight-bold">Email:</label>
                  <input type="email" readonly
                    class="form-control pl-5" value="{{$user->email}}" required name="Email" id="Email" aria-describedby="helpIdFirstname" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                  <label for="Password" class="font-weight-bold">Mot de Passe: </label>
                  <input type="password"
                    class="form-control pl-5 @error('Password') is-invalid @enderror" required name="Password" id="Password" aria-describedby="helpIdFirstname" placeholder="Mot de passe">
                  <small id="helpIdFirstname" class="form-text text-muted">Saisir le mot de passe</small>
                  @error('Password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="PasswordConfirm" class="font-weight-bold">Confirmer le mot de Passe: </label>
                  <input type="password"
                    class="form-control pl-5 @error('PasswordConfirm') is-invalid @enderror" required name="PasswordConfirm" id="PasswordConfirm" aria-describedby="helpIdFirstname" placeholder="Mot de passe">
                  <small id="helpIdFirstname" class="form-text text-muted">Confirmer le mot de passe</small>
                  @error('PasswordConfirm')
                    <div class="alert alert-danger">Les mots de passes ne correspondent pas</div>
                  @enderror
                </div>
                
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Confimer</button>
    </form>
    </div>
  </div>
@endsection