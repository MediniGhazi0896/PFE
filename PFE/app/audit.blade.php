@extends('layouts.app', ['activePage' => 'audit-add', 'titlePage' => __('Add auditor')])

@section ('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST">
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Add Auditor </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="Lastname" class="font-weight-bold">Name :</label>
                            <input type="text"
                                class="form-control pl-5" required name="name" id="name" aria-describedby="helpIdName">
                            @error('name')
                                <div class="alert alert-danger">This Name is allready used </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="Lastname" class="font-weight-bold">Lastname :</label>
                            <input type="text"
                                class="form-control pl-5" required name="lastname" id="lastname" aria-describedby="helpIdlastname">
                        </div>
                        <div class="form-group mt-3">
                            <label for="category" class="font-weight-bold">Nationality :</label>
                            <input type="text"
                                class="form-control pl-5"  required name="nationality" id="nationality" aria-describedby="helpIdnationality">
                         
                        </div> 
                            
                        <div class="form-group mt-3">
                            <label for "date of birth" class="font-weight-bold">Date of Birth :</label>
                            <input type="date"
                                class="form-control pl-5" required name="birthdate" id="birthdate" aria-describedby="helpIdbirthdate">
                            @error('date of birth ')
                                <div class="alert alert-danger"> Empty Entry</div>
                            @enderror
                        </div>
                          
                    <div class="content">  
                    <div class="form-group mt-3">
                            <label for="NIC" class="font-weight-bold"> National Identity Card n° :</label>   
                            <input type="text" class="form-control pl-5"  required name="NIC" id="NIC" aria-describedby="helpIdNIC">
                    </div>
                            <div class="form-group mt-3">
                             <label for="issued" class="font-weight-bold">issued on :</label>
                             <input type="date" class="form-control pl-5" required name="issued" id="issued" aria-describedby="helpIdissued"> 
                            
                      </div>
                             
                          </div>
                            <div class="form-group mt-3">
                             <label for="in" class="font-weight-bold">in :</label>
                             <input type="text" class="form-control pl-5" required name="in" id="in" aria-describedby="helpIdin"> 
                      </div>   
                             
                       
                          </div>
                            <div class="form-group mt-3">
                             <label for="address" class="font-weight-bold">Address :</label>
                             <input type="text" class="form-control pl-5" required name="address" id="address" aria-describedby="helpIdaddress"> 
                      </div>    
                            
                          </div>
                            <div class="form-group mt-3">
                             <label for="phone" class="font-weight-bold">Phone Number :</label>
                             <input type="text" class="form-control pl-5" required name="phone" id="phone" aria-describedby="helpIdphone"> 
                      </div>   
                             
                         
                          </div>
                            <div class="form-group mt-3">
                             <label for="email" class="font-weight-bold">Email Address :</label>
                             <input type="email" class="form-control pl-5" required name="email" id="email" aria-describedby="helpIdemail"> 
                      </div>  
                             
             
                             
                </div>
                </div>
            </div>
          
                             <button type="submit" class="btn btn-block btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </div>
</div>
     
               
@endsection