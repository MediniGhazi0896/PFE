@extends('layouts.app', ['activePage' => 'upload-form', 'titlePage' => __('Form Upload ')])


@section ('content')

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
<div class='navbar-form'>
   
<form  action="{{action('AuditorController@uploadform')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Upload PDF Form </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                   
                </div>
                 
                             <!-- form upload  -->
                        <p> </p>     
                     <p> </p> 
                     <p> </p> 
                        <div class="" align="center">
                     <label for="file"class="font-weight-bold">  upload PFD form : </label>
                     <input type="file" class=""  id="file" name="file"
                           accept=".pdf" required>
            
                        </div>
                         <p> </p>     
                 		<p> </p>
                  
                  	 <!-- Submit button -->
                              
                             <button type="submit" class="btn btn-block btn-primary">Upload</button>  
                     
                         </div> 
                   
                     
 </form>
        </div>
      </div>
    </div>
  </div>

                     </div>
                     
      
@endsection       