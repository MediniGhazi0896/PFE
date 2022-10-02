@extends('layouts.app', ['activePage' => 'auditor-list', 'titlePage' => __('list auditors')])

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
          <table class="table table-striped table-bordered" id="auditors_table">
            <thead>
              <tr>
			
                <th>
                  name
                </th>
                <th>
                  lastname
                </th>
				<th>
                  nationality
                </th>
                <th>
                  birthdate
                </th>
                <th>
                  NIC
                </th>
                <th>
                  issued
                </th>
				<th>
				  in
				</th>
				<th>
				  address
				</th>
				<th>
				  phone
				</th>
				<th>
				  email
				</th>
                <th>
                  Modifier
                </th>
              </tr>
            </thead>
            @foreach ($auditors as $auditors)
            <tr>
			
              <td>
                {{$auditors->name}}
              </td>
              <td>
                {{$auditors->lasname}}
              </td>
               <td>
                {{$auditors->nationality}}
              </td>
              <td>
                {{$auditors->birthdate}}
              </td>
              <td>
                {{$auditors->NIC}}
              </td>
              <td>
                {{$auditors->issued}}
              </td>
              <td>
              {{$auditors->in}}
			 </td>
             <td>
             {{$auditors->address}}
             </td>
             <td>
             {{$auditors->phone}}
             </td>
             <td>
             {{$auditors->email}}
             </td>             
              <td>
                <a href="/audit/{{$auditors->id}}" class="btn btn-block btn-warning">
                    Modify
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
