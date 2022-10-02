@extends('layouts.app', ['activePage' => 'Moral-Conditions', 'titlePage' => __('Form Upload ')])


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
   
<form  action="{{action('AuditorController@SubmitStep2Moral')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title "> Moral Persons Certification Conditions  </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                    </div>
                
                     <p> </p> 
                 <p> </p> 
                 
                     <div class=" card-header card-header-primary">
                    <h4 class="card-title "> I - Administrative conditions </h4>
                  <p class="card-category">  Any legal person wishing to exercise the activity of audit expert in the field of IT security must fulfill the following conditions : </p>
                 <p> </p> 
                     </div>
                        <p> </p> 
            <p class="card-header">  1 -    Be incorporated in accordance with Tunisian law and having a share capital owned by name and mainly by Tunisians.
The legal representative of the legal person must be of Tunisian nationality.   </p> 
                 
                  <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="cond1" id="cond1">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond1"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond1"> No 
 						 </label>
						</div>
                 </div> 
                 
                 
                 <p class="card-header">  2 - The legal representative of the legal person must be of Tunisian nationality.   </p> 
                 
                  <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond2" id="Cond2">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond2">  Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond2"> No 
 						 </label>
						</div>
                 </div> 
       
 <p class="card-header"> 3 - The legal representative and all auditors reporting to the legal person must benefit from their civil rights and not have a criminal record. </p>
                 
                 <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond3" id="Cond3">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond3"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond3"> No 
 						 </label>
						</div>
                 </div> 
                 
                 
    <p class="card-header"> 4 - Not be bankrupt. </p>
                 
                 <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond4" id="Cond4">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond4"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond4"> No 
 						 </label>
						</div>
                 </div> 
                 
                 
 <p class="card-header"> 5 - The legal representative and all auditors reporting to the legal person must be affiliated to the national social security fund. </p>
                 
                 <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond5" id="Cond5">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond5"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond5"> No 
 						 </label>
						</div>
                 </div> 
                  <p> </p> 
                     
                  <p> </p> 
                  <p> </p> 
                  <div class=" card-header card-header-primary">
                    <h4 class="card-title ">  II - Technical conditions </h4>
                     </div>
             
                 <h6 class="card-header">  1 - The minimum technical and material means necessary to exercise the audit activity in the field of IT security are fixed as follows : </h6>
                 
           <p class="card-header">  -   Maintain a manual of organizational and technical procedures to ensure the quality of the audit and protect the information and data that will be recovered and processed, against the risk of damage, modifications or others that may occur. </p>
                <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond6" id="Cond6">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond6"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond6">  No 
 						 </label>
						</div>
                 </div>
              <p class="card-header">  -  Use the tools adopted by the national IT security agency to carry out audit missions. </p>
                 <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond7" id="Cond7">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond7"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond7">  No 
 						 </label>
						</div>
                 </div>
                 <p> </p>
                 <p> </p>
                 
              
                 <h6 class="card-header">  2 - The legal person must have the human resources as follows  - | -  Employ at least two full-time managers, each of whom must meet the following conditions: </h6>
           
           
                
                 <p class="card-header"> - Be of Tunisian nationality and benefit from their civil rights and not have a criminal record. </p>
                <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond8" id="Cond8">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond8"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond8">  No 
 						 </label>
						</div>
                 </div>
                
              <p class="card-header">  - Hold a license in IT or telecommunications or an equivalent diploma. </p>
                <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond9" id="Cond9">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond9"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond9">  No 
 						 </label>
						</div>
                 </div>
             
                  <p class="card-header"> - Hold a professional certificate in the field of computer security recognized by the national agency for computer security. </p>
                <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond10" id="Cond10">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond10"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond10">  No 
 						 </label>
						</div>
                 </div>
             
                  
                     <p class="card-header">  - Have a minimum professional experience of (3) years in the field of computer security. </p>
                <div class="col-sm-12" align="center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons" name="Cond11" id="Cond11">
 						 <label class="btn btn-success">
 					   <input type="radio" checked value="yes" name="cond11"> Yes
 						 </label>
  						<label class="btn btn-success">
 					   <input type="radio" value="no" name="cond11">  No 
 						 </label>
						</div>
                 </div>
                  	 <!-- Submit button -->
                             
                             <button type="submit" class="btn btn-block btn-primary">Submit</button>   
                   
         </div>            
 </form>
        </div>
      </div>
    </div>
  </div>

                     </div>
                     
      
@endsection       