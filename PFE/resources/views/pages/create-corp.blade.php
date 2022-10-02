@extends('layouts.app', ['activePage' => 'corp-add', 'titlePage' => __('Add Corporation')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{action('CorpsController@createCorp')}}" method="POST">
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Ajouter une société</h4>
                    <p class="card-category"> Veuillez entrer les informations suivantes</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="Lastname" class="font-weight-bold">Nom :</label>
                            <input type="text"
                                class="form-control pl-5" required name="name" id="name" aria-describedby="helpIdName">
                            @error('name')
                                <div class="alert alert-danger">Ce nom est déja utilisé</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="activity_sector" class="font-weight-bold">Secter d&#39;activité :</label>
                            <select class="form-control pl-5" name="activity_sector" id="activity_sector" required>
                                <option>
                                    Finances
                                </option>
                                <option>
                                    Social/Santé
                                </option>
                                <option>
                                    TIC
                                </option>
                            </select>
                            @error('activity_sector')
                                <div class="alert alert-danger">Ce champ est obligatoire</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="category" class="font-weight-bold">Catégorie :</label>
                            <select class="form-control pl-5" name="category" id="category" required>
                                <option>
                                    Entreprise
                                </option>
                                <option>
                                    Banque/Assurance
                                </option>
                            </select>
                            @error('category')
                                <div class="alert alert-danger">Ce champ est obligatoire</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="criticality_class" class="font-weight-bold">Classe de criticité :</label>
                            <select class="form-control pl-5" name="criticality_class" id="criticality_class" required>
                                <option>
                                    1
                                </option>
                                <option>
                                    2
                                </option>
                                <option>
                                    3
                                </option>
                            </select>
                            @error('criticality_class')
                                <div class="alert alert-danger">Ce champ est obligatoire</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="type" class="font-weight-bold">Type :</label>
                            <select class="form-control pl-5" name="type" id="type" required>
                                <option>
                                    Privé
                                </option>
                                <option>
                                    Public
                                </option>
                            </select>
                            @error('type')
                                <div class="alert alert-danger">Ce champ est obligatoire</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
