@extends('layouts.app', ['activePage' => 'upload-physical', 'titlePage' => __('Add auditor')])


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
    <strong>Sorry!</strong> There were more problems with the upload. <br><br>
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
        <form  action="{{action('AuditorController@submitPhysicalform')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title "> Physical Person Informations </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                    <p> * : Required  </p>
                </div>
                    <p>  </p>
                     <p>  </p>
                     <!-- ID div -->
                    <div class="col-sm-12">
                      <input type="text" class="form-control pl-5"  name="id" id="id" hidden>
                    </div>
                    
                    <!-- type div -->
                          <div class="col-sm-12">
                      <input type="text" class="form-control pl-5"  name="type" id="type"  value='physical' hidden>
                    </div>
                    
                      <!-- name div   -->
                    
                    <div class="col-sm-12">
                            <label for="name"   class="font-weight-bold">  * Name :  </label>
                            <input type="text"
                                class="form-control pl-5" required name="name" id="name" describedby="helpIdName">
                        @error('name')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                       </div>
                    <!-- lastnamename div -->
                            
                    <div class="col-sm-12">
                            <label for="Lastname" class="font-weight-bold"> * Lastname :</label>
                            <input type="text"
                                class="form-control pl-5" required name="lastname" id="lastname" describedby="helpIdlastname">
                             @error('lastname')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                        </div>
                          
                      <!-- Nationality div -->
                            
                            <div class="col-sm-12">
                            <label for="category" class="font-weight-bold"> * Nationality :</label>
                            <input type="text"
                                class="form-control pl-5"  required name="nationality" id="nationality">
                          @error('nationality')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                        </div> 
                        
                             <!-- Birthdate div -->
                            
                         <div class="col-sm-12">
                            <label for "date of birth" class="font-weight-bold"> * Date of Birth :</label>
                            <input type="date"
                                class="form-control pl-5" required name="birthdate" id="birthdate" aria-describedby="helpIdbirthdate">
                             @error('birthdate')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                        </div>
                            
                             <!-- NIC div -->
                        
                    <div class="NIC-block">
                    <div class="col-sm-12">
                            <label for="NIC" class="font-weight-bold"> * National Identity Card n° :</label>   
                            <input type="text"  class="form-control pl-5" required  name="NIC" id="NIC" aria-describedby="helpIdNIC" maxlength=8>
                             @error('NIC')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                            </div>
                    
                             <!-- issued div -->
                            
                            <div class="col-sm-12">
                             <label for="issued" class="font-weight-bold">* Issued on :</label>
                             <input type="date" class="form-control pl-5" required name="issued" id="issued" aria-describedby="helpIdissued"> 
                              @error('issued')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                      </div>
                             
                              <!-- in div -->
                         
                            <div class="col-sm-12">
                             <label for="in" class="font-weight-bold"> * In :</label>
                             <input type="text" class="form-control pl-5" required name="in" id="in" aria-describedby="helpIdin"> 
                              @error('in')
						<div class="alert alert-danger"> Allready Used !!!</div>
						@enderror
                      </div>   
                             
                     
 							<!-- address div -->
                     
                            <div class="col-sm-12">
                             <label for="address" class="font-weight-bold"> * Address :</label>
                             <input type="text" class="form-control pl-5" required name="address" id="address" aria-describedby="helpIdaddress"> 
                            @error('address')
						<div class="alert alert-danger"> Allready Used !!!</div>
						@enderror
                      </div>    
                            
                              <!--phone div -->
                         
                            <div class="col-sm-12">
                             <label for="phone" class="font-weight-bold"> * Phone Number :</label>
                             <input type="text" class="form-control pl-5" required name="phone" id="phone" aria-describedby="helpIdphone" maxlength=8> 
                         	 @error('phone')
						<div class="alert alert-danger"> Allready Used !!!</div>
						@enderror
                      </div>   
                             
                          <!-- email div -->
                        
                            <div class="col-sm-12">
                             <label for="email" class="font-weight-bold"> * Email Address :</label>
                             <input type="email" class="form-control pl-5" required name="email" id="email" aria-describedby="helpIdemail"> 
                          	 @error('email')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
                              </div> 
             
                   <!--Physical Person Files Upload Section -->
                   
           
                     <p>  </p>
                     <p>  </p>
                        
                         <div class=" card-header card-header-primary">
                    <h4 class="card-title ">  Physical Person Upload Files Section </h4>
                     </div>
                      <p>  </p>
                     <p>  </p>
                             <p class="card-header"> Required Files : </p>
                 <p class="card-header"> PS : All Files Must be Any Image Format !! And all Are Required </p>
                    <ul>
    					<li> 1 : Two copies of the present specifications signed by the legal representative of the legal person. </li>
   						<li> 2 :  Any proof of registration for this purpose on the agency''s official website. </li>
                        <li> 3 : A copy of the national social security fund membership card. </li>
                        <li> 4 : A copy of the national identity card. </li>
                        <li> 5 : Bulletin N ° 3 dated less than three months ago. </li>
                        <li> 6 : A copy of the university degree proving the required scientific level. </li>
                        <li> 7 : A copy of professional certificates in the field of computer security recognized by the national agency for computer security.</li>
                        <li> 8 : A public key from a trusted electronic certification authority.</li>
                        <li> 9 :  A copy of the tax identification card. </li>
                        <li> 10 : Documents justifying professional experience in the field of computer security </li>
                        <li> 11 : A copy of the organizational and technical procedures manual to ensure the quality of the audit and to protect the data received and processed against the risk of damage, modifications or other risks that may arise. </li>
                        <li> 12 :  List of tools used to carry out audit missions according to the presentation model of the audit tools used </li>

					</ul>
                        
                        
                     <p>  </p>
                     <p>  </p>
                        
                             <!-- File 1 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File1"class=""> File 1 upload  </label>
                     <input type="file" class=""  id="File1" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required multiple>
                         </div>
                         
                           <!-- File 2 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File2"class=""> File 2  upload  </label>
                     <input type="file" class=""  id="File2" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 3 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File3"class=""> File 3  upload  </label>
                     <input type="file" class=""  id="File3" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     



 			   <!-- File 4 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File4"class=""> File 4 upload  </label>
                     <input type="file" class=""  id="File4" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 5 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File5"class="">File 5  upload  </label>
                     <input type="file" class=""  id="File5" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 6 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File6"class=""> File 6 upload  </label>
                     <input type="file" class=""  id="File6" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                 
                           <!-- File 7 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File7"class=""> File 7 upload  </label>
                     <input type="file" class=""  id="File7" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 8 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File8"class=""> File 8 upload  </label>
                     <input type="file" class=""  id="File8" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 9 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File9"class=""> File 9 upload  </label>
                     <input type="file" class=""  id="File9" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 10 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File10"class="">  File 10 upload </label>
                     <input type="file" class=""  id="File10" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required multiple>
                         </div>
                     
                           <!-- File 11 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File11"class="">  File 11 upload </label>
                     <input type="file" class=""  id="File11" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
                         </div>
                     
                           <!-- File 12 Upload -->
                             
                       <div class="col-sm-12">
                     <label for="File12"class="">  File 12 upload </label>
                     <input type="file" class=""  id="File12" name="Physicalfilesnames[]"
                           accept=".jpg, .jpeg, .png" required>
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