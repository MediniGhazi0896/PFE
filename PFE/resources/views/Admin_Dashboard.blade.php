@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

  
@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<div class='navbar-form'>
        <form method="POST">
 @csrf
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h3 class="card-title "> Admin Dashboard :     </h3>
                    <p class="card-category">  Here Are The Available Features </p>
                </div>
        		<p> </p> 

                   <div class="form-group mt-3"> 
                 
                     <div class="col-md-12">
                    <label for="" class="font-weight-bold"> 
					Option 1 : Add User <a href="{{route('add-user') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
					</label>
                    </div>
                    
                   <div class="col-md-12">
                    <label for=""   class="font-weight-bold">
					Option 2 : List Users <a href="{{route('user-list') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
                    </label>
					</div>
                    </div>
                    <div class="col-md-12">
                    <label for=""   class="font-weight-bold">
					Option  3 : Search User <a href="{{route('Search-user') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
                    </label>
                    </div>
                    
                    
                </div>
                </div>
            </div>          
        </form>

@endsection

