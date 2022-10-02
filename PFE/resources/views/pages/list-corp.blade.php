@extends('layouts.app', ['activePage' => 'corp-list', 'titlePage' => __('Add Corporation')])

@section('content')
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
        <div>
          <table class="table table-striped table-bordered" id="corps_table">
            <thead>
              <tr>
                <th>
                  Nom
                </th>
                <th>
                  Sécteur d&#39;activité
                </th>
                <th>
                  Catégorie
                </th>
                <th>
                  Classe de criticité
                </th>
                <th>
                  Type
                </th>
                <th>
                  Modifier
                </th>
              </tr>
            </thead>
            @foreach ($corps as $corp)
            <tr>
              <td>
                {{$corp->name}}
              </td>
              <td>
                {{$corp->activity_sector}}
              </td>
              <td>
                {{$corp->category}}
              </td>
              <td>
                {{$corp->criticality_class}}
              </td>
              <td>
                {{$corp->type}}
              </td>
              <td>
                <a href="/corps/{{$corp->id}}" class="btn btn-block btn-warning">
                    Modifier
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
