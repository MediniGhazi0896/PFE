  
@extends('layouts.app', ['activePage' => 'user_find', 'titlePage' => __('Download Form')])


@section ('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<div class='navbar-form'><div class="row">
        <div class="col-md-12">                 
   <form  method="POST">
                     @csrf
                     
 <div>
          <table class="table table-striped table-bordered dataTable no-footer" id="table" role="grid" aria-describedby="table_info">
            <thead>
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Email 
                </th>
				<th>
                 Firstname
                </th>
                <th>
                  Lastname
                </th>
                <th>
                 Displayname
                </th>
                <th>
               Role
                </th>

              </tr>
            </thead>
           @foreach($result as $result) 
            <tr>
			<td>
				{{ $result->name }}
			</td>
              <td>
                {{ $result->email }}
              </td>
              <td>
                {{ $result->firstname }}
              </td>
               <td>
                {{ $result->lastname }}
              </td>
              <td>
                {{ $result->displayname }}
              </td>
              <td>
                {{ $result->role }}
              </td>
       
            </tr>
         @endforeach
               
                     </div>
  </form>
              </div>
              </div>
</div>
@endsection