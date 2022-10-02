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
                    <h3 class="card-title "> User Dashboard :    </h3>
                    <p class="card-category"> Please Follow The Instructions Bellow!</p>
                </div>
        		<p> </p> 

                   <div class="form-group mt-3"> 
                   <div class="col-md-12">
                    <label for=""   class="font-weight-bold">  Step 1 : Fill In Form and Download it (.PDF) after Finishing All The Steps  </label>
					</div>
                    
                     <div class="col-md-12">
                    <label for="" class="font-weight-bold"> 
					Option 1 : For Physical Person Please Click <a href="{{route('physical-form') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
					</label>
                    </div>
                    
                   <div class="col-md-12">
                    <label for=""   class="font-weight-bold">
					Option 2 : For Moral Persons Please Click <a href="{{route('moral-form') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
                    </label>
					</div>
                    </div>
                    <div class="col-md-12">
                    <label for=""   class="font-weight-bold">
					Step 2 : To  Upload The (.PDF) File  Click <a href="{{route('upload-form') }}" class="btn btn-primary btn-link btn-lg"> Here </a> ! .
                    </label>
                    </div>
                    
                    
                </div>
                </div>
            </div>          
        </form>

@endsection

