@extends('layouts.app', ['activePage' => 'Physical-Conditions', 'titlePage' => __('Form Upload ')])


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
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were some problems with the upload. <br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
<div class='navbar-form'>
   
<form  action="{{action('AuditorController@SubmitPhysicalConditions')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title "> Physical Persons Certification Conditions </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                </div>            
                 <p> </p> 
                         <p> </p>
                     <p></p>
                   <div class=" card-header card-header-primary">
                    <h4 class="card-title "> I - Administrative conditions </h4> 
                     <p class="card-category">  Any natural person wishing to exercise the audit activity in the field of IT security must fulfill the following conditions: </p>
                  	</div>
                 <p class="card-header">  1 -   Be of Tunisian nationality and enjoy your civil rights.    </p>
                      <div class="col-sm-12" align="center" name="Cond1" id="Cond1">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" >
 						 <label class="btn btn-success">
 					   <input type="radio" name="cond1" value="yes"> Yes
 						 </label>
  						<label class="btn btn-success"  >
 					   <input type="radio" name="cond1" value="no"> No 
 						 </label>
						</div>
                 </div> 
                 
                     <p class="card-header">  2 -   The tax identification card must mention the audit of the security of information systems and networks as a main activity.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond2" id="Cond2">
 						 <label class="btn btn-success">
 					   <input type="radio"  name="cond2" value="yes"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio"   name="cond2" value="no"> No 
 						 </label>
						</div>
                 </div> 
                     
                      <p class="card-header">  3 -   Hold a license in IT or telecommunications or an equivalent diploma.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond3" id="Cond3">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes" name="cond3"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond3"> No 
 						 </label>
						</div>
                 </div> 
                     
                     
                        <p class="card-header"> 4 -  Hold a professional certificate in the field of computer security recognized by the national agency for computer security.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond4" id="Cond4">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes" name="cond4"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond4"> No 
 						 </label>
						</div>
                 </div> 
                        
                     <p class="card-header"> 5 -   Have a minimum professional experience of (3) years in the field of computer security.     </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond5" id="Cond5">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes" name="cond5"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond5"> No 
 						 </label>
						</div>
                 </div> 
                     
                       
                     <p class="card-header"> 6 - Be affiliated with the national social security fund.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond6" id="Cond6">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes" name="cond6"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond6"> No 
 						 </label>
						</div>
                 </div> 
                     <p> </p> 
                         <p> </p>
                     <p></p>
                     
                    <div class=" card-header card-header-primary">
                    <h4 class="card-title "> II - Technical conditions  </h4> 
                     <p class="card-category">  The minimum technical and material means necessary to exercise the audit activity in the field of IT security are fixed as follows :  </p>
                  	</div> 
                   
                     <p class="card-header"> 1 -  Maintain a manual of organizational and technical procedures to ensure the quality of the audit and protect the information and data that will be recovered and processed, against the risk of damage, modifications or others that may occur.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond7" id="Cond7">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes" name="cond7"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond7"> No 
 						 </label>
						</div>
                 </div> 
                     
                       <p class="card-header"> 2 -  Use the tools adopted by the national IT security agency to carry out audit missions.    </p>
                      <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond8" id="Cond8">
 						 <label class="btn btn-success">
 					   <input type="radio"  value="yes"name="cond8"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond8"> No 
 						 </label>
						</div>
                 </div> 
           
                     
                     <!-- Submit button -->
                     <!-- <div class="card-footer ml-auto mr-auto">   </div> -->
                             <button type="submit" class="btn btn-primary"> Submit </button>   
                  
                     
 </form>
        </div>
      </div>
    </div>
  </div>

                     </div>
                     
      
@endsection       