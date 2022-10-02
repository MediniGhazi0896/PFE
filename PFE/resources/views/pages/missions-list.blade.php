@extends('layouts.app', ['activePage' => 'missions-list', 'titlePage' => __('Missions d`audit')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            Missions d&#39;audit en cours
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered" id="corps_table">
                <thead>
                  <tr>
                    <th>
                      Nom de la société
                    </th>
                    <th>
                      Date du dépôt du rapport
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                @foreach ($missions as $mission)
                <tr>
                    <td>
                      {{$mission->name}}
                    </td>
                    <td>
                      {{$mission->date}}
                    </td>
                    <td>
                      <a href="/missions/{{$mission->id}}" class="btn btn-block btn-warning">
                          Remplir
                      </a>
                    </td>
                  </tr>
                @endforeach
            </table>
        </div>
    </div>
  </div>
</div>
@endsection
