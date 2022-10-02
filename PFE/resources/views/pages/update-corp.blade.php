@extends('layouts.app', ['activePage' => 'corp-list', 'titlePage' => __('Add Corporation')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <a href="/corps/">
            Retour
        </a>
    </div>
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
        <div>
            <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-12">
                            <form action="{{action('CorpsController@updateCorp')}}" method="POST">
                                <div class="card">
                                    <div class=" card-header card-header-primary">
                                        <h4 class="card-title ">Modifier une société</h4>
                                        <p class="card-category"> Veuillez entrer les informations suivantes</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @csrf
                                            <input id="id" name="id" value="{{$corp->id}}" hidden>
                                            <div class="form-group mt-3">
                                                <label for="Lastname" class="font-weight-bold">Nom :</label>
                                                <input type="text"
                                                    class="form-control pl-5" value="{{$corp->name}}" required name="name" id="name" aria-describedby="helpIdName">
                                                @error('name')
                                                    <div class="alert alert-danger">Ce nom est déja utilisé</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="activity_sector" class="font-weight-bold">Secter d&#39;activité :</label>
                                                <select class="form-control pl-5" name="activity_sector" id="activity_sector" required>
                                                    <option @if ($corp->activity_sector === "Finances") checked @endif>
                                                        Finances
                                                    </option>
                                                    <option @if ($corp->activity_sector === "Social/Santé") checked @endif>
                                                        Social/Santé
                                                    </option>
                                                    <option @if ($corp->activity_sector === "TIC") checked @endif>
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
                                                    <option @if ($corp->category === "Entreprise") checked @endif>
                                                        Entreprise
                                                    </option>
                                                    <option @if ($corp->category === "Banque/Assurance")  checked @endif>
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
                                                    <option @if ($corp->criticality_class === 1) checked @endif>
                                                        1
                                                    </option>
                                                    <option @if ($corp->criticality_class === 2) checked @endif>
                                                        2
                                                    </option>
                                                    <option @if ($corp->criticality_class === 3) checked @endif>
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
                                                    <option @if ($corp->type === "Privé") checked @endif>
                                                        Privé
                                                    </option>
                                                    <option @if ($corp->type === "Public") checked @endif>
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
                                <button type="submit" class="btn btn-block btn-primary">Modifier</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
