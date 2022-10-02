@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('Add User')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{action('MailController@send')}}" method="POST">
          <div class="card">
            <div class=" card-header card-header-primary">
              <h4 class="card-title ">Inviter un utilisateur</h4>
              <p class="card-category"> Formulaire d&#39;invitation</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  @csrf
                  <div class="form-group mt-3">
                    <label for="Lastname" class="font-weight-bold">Nom :</label>
                    <input type="text"
                      class="form-control pl-5" required name="Lastname" id="Lastname" aria-describedby="helpIdLastname">
                    @error('Lastname')
                      <div class="alert alert-danger">Ce champ est obligatoire</div>
                    @enderror
                  </div>
                  <div class="form-group mt-5">
                    <label for="Firstname" class="font-weight-bold">Prénom :</label>
                    <input type="text"
                      class="form-control pl-5" required name="Firstname" id="Firstname" aria-describedby="helpIdFirstname">
                    @error('Firstname')
                      <div class="alert alert-danger">Ce champ est obligatoire</div>
                    @enderror
                  </div>
                  <div class="form-group mt-5">
                    <label for="Email" class="font-weight-bold">Email :</label>
                    <input type="email"
                      class="form-control pl-5" required name="Email" id="Email" aria-describedby="helpIdEmail">
                    @error('Email')
                      <div class="alert alert-danger">Cette adresse mail est déja utilisée</div>
                    @enderror
                  </div>
                  <div class="form-group mt-5" id="IpAdresses">
                    <label for="IpAdresses" class="font-weight-bold">Adresse IP :</label>
                    <input type="text"
                      class="form-control pl-5" required pattern="^([0-9]{1,3}\.){3}[0-9]{1,3}$" name="IpAdresses" id="IpAdresses" >
                      @error('IpAdresses')
                        <div class="alert alert-danger">Ce champ est obligatoire</div>
                      @enderror
                  </div>
                  <div class="form-group mt-3">
                      <label for="Role" class="font-weight-bold">Role :</label>
                      <select class="form-control" required name="Role" id="Role">
                        <option>
                          Utilisateur
                        </option>
                        <option>
                          Administrateur
                        </option>
                      </select>
                    </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Inviter</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
