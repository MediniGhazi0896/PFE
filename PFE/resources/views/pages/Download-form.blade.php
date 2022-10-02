@extends('layouts.app', ['activePage' => 'Download-form', 'titlePage' => __('Download Form')])


@section ('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<div class='navbar-form'>
        <form  action="{{action('AuditorController@exportPDF')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Download PDF Form </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                   
                </div>
                 
                  	 <!-- Submit button -->
                             
                             <button type="submit" class="btn btn-block btn-primary">Download</button>           
 </form>
        </div>
      </div>
    </div>
  </div>

                     </div>
      
@endsection       