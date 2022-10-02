@extends('layouts.app', ['activePage' => 'user-list', 'titlePage' => __('Liste des Utilisateurs')])

@section('content')
<div class="content">
    <span class="bmd-form-group">
        <div class="input-group no-border">
            <input type="text" value="" class="form-control" #search name="search" id="search" placeholder="Rechercher une personne">
            <button class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
        </div>
    </span>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  <div class="container-fluid">
    <div class="row" id="row">
        @foreach ($users as $user)
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="card" id="user-{{$user->id}}" data-user="{{$user}}">
                <div class=" card-header card-header-primary">
                    {{$user->displayname}}
                </div>
                <div class="card-body">
                    <div class="form container">
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Prénom:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <input type="text" class="form-control" name="firstname-{{$user->id}}" id="firstname-{{$user->id}}" placeholder="Prénom" value="{{$user->firstname}}" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Nom:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <input type="text" class="form-control" name="lastname-{{$user->id}}" id="lastname-{{$user->id}}" placeholder="Nom" value="{{$user->lastname}}" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Nom d&#39;utilisateur:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <input type="text" class="form-control" name="name-{{$user->id}}" id="name-{{$user->id}}" placeholder="Nom d'utilisateur" value="{{$user->name}}" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Email:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <input type="email" class="form-control" name="email-{{$user->id}}" id="email-{{$user->id}}" placeholder="test@test.com" value="{{$user->email}}" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Pseudo:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <input type="text" class="form-control" name="displayname-{{$user->id}}" id="displayname-{{$user->id}}" placeholder="Pseudo" value="{{$user->displayname}}" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-5 col-md-5 col-lg-5 col-form-label">
                                Role:
                            </label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group tala3">
                                    <select class="form-control" name="role-{{$user->id}}" id="role-{{$user->id}}" value="{{$user->role}}" required="true" aria-required="true">
                                        <option @if ($user->role == "Utilisateur") selected @endif >
                                            Utilisateur
                                        </option>
                                        <option @if ($user->role == "Administrateur") selected @endif >
                                            Administrateur
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button name="submit-{{$user->id}}" id="submit-{{$user->id}}" class="btn btn-block btn-success">
                                Modifier
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                    <input class="form-check-input" disabled  type="checkbox" @if($user->active==1) checked="true" @endif name="active-check-{{$user->id}}" id="active-check-{{$user->id}}" > Actif
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                    <input class="form-check-input" disabled  type="checkbox" @if($user->deleted==1) checked="true" @endif name="deleted-check-{{$user->id}}" id="deleted-check-{{$user->id}}" > Supprimé
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 py-3">
                                <button name="activate-{{$user->id}}" id="activate-{{$user->id}}" class="btn btn-block btn-warning">
                                    @if ($user->active==1)
                                        Désactiver
                                    @else
                                        Réactiver
                                    @endif
                                </button>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 py-3">
                                <button name="delete-{{$user->id}}" id="delete-{{$user->id}}" class="btn btn-block btn-danger">
                                    @if ($user->deleted==0)
                                        Supprimer
                                    @else
                                        Restaurer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
@endsection
