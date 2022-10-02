@extends('layouts.app', ['activePage' => 'audit-list', 'titlePage' => __('Modify auditor')])

@section ('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form  action="{{action('AuditorController@updateMoral')}}" method="POST">
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title "> Modify Moral Person </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @csrf
                  <div class="form-group mt-3">
                   <input input type="text"
                                class="form-control pl-5" id="id" name="id" value="{{$Moral->id}}" hidden>
                    </div>
                           <div class="form-group mt-3">
                   <input input type="text"
                                class="form-control pl-5" id="type" name="type" value="{{$Moral->type}}" hidden>
                    </div>
                  
                        <div class="form-group mt-3">
                            <label for="Lastname" class="font-weight-bold">Name :</label>
                            <input type="text"
                                class="form-control pl-5" value="{{$Moral->name}}"  name="name" id="name" aria-describedby="helpIdName">
                            @error('name')
                                <div class="alert alert-danger">This Name is allready used </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="Lastname" class="font-weight-bold">Lastname :</label>
                            <input type="text"
                                class="form-control pl-5" value="{{$Moral->lastname}}" required name="lastname" id="lastname" aria-describedby="helpIdlastname">
                             @error('lastname ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="category" class="font-weight-bold">Nationality :</label>
                            <input type="text"
                                class="form-control pl-5" value="{{$Moral->nationality}}" required name="nationality" id="nationality" aria-describedby="helpIdnationality">
                         @error('nationality ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                        </div> 
                            
                        <div class="form-group mt-3">
                            <label for "date of birth" class="font-weight-bold">Date of Birth :</label>
                            <input type="date"
                                class="form-control pl-5" value="{{$Moral->birthdate}}" required name="birthdate" id="birthdate" aria-describedby="helpIdbirthdate">
                            @error('date of birth ')
                                <div class="alert alert-danger"> Empty Entry</div>
                            @enderror
                        </div>
                          
                    <div class="content">  
                    <div class="form-group mt-3">
                            <label for="NIC" class="font-weight-bold"> National Identity Card n° :</label>   
                            <input type="text" class="form-control pl-5" value="{{$Moral->NIC}}" required name="NIC" id="NIC" aria-describedby="helpIdNIC">
                            @error('NIC ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                    </div>
                            <div class="form-group mt-3">
                             <label for="issued" class="font-weight-bold">issued on :</label>
                             <input type="date" class="form-control pl-5" value="{{$Moral->issued}}" required name="issued" id="issued" aria-describedby="helpIdissued"> 
                            @error('issued ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                      </div>
                             
                          </div>
                            <div class="form-group mt-3">
                             <label for="in" class="font-weight-bold">in :</label>
                             <input type="text" class="form-control pl-5" value="{{$Moral->in}}" required name="in" id="in" aria-describedby="helpIdin"> 
                             @error('in ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                      </div>   
                             
                       
                          </div>
                            <div class="form-group mt-3">
                             <label for="address" class="font-weight-bold">Address :</label>
                             <input type="text" class="form-control pl-5" value="{{$Moral->address}}" required name="address" id="address" aria-describedby="helpIdaddress"> 
                             @error('address ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                      </div>    
                            
                          </div>
                            <div class="form-group mt-3">
                             <label for="phone" class="font-weight-bold">Phone Number :</label>
                             <input type="text" class="form-control pl-5" value="{{$Moral->phone}}" required name="phone" id="phone" aria-describedby="helpIdphone"> 
                             @error('phone')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                      </div>   
                             
                         
                          </div>
                            <div class="form-group mt-3">
                             <label for="email" class="font-weight-bold">Email Address :</label>
                             <input type="email" class="form-control pl-5" value="{{$Moral->email}}" required name="email" id="email" aria-describedby="helpIdemail"> 
                             @error('email ')
                                <div class="alert alert-danger"> allready used </div>
                            @enderror
                      </div>  
                             
             
                             
                </div>
                </div>
            </div>
          
                             <button type="submit" class="btn btn-block btn-primary">Modify</button>
        </form>
      </div>
    </div>
  </div>
</div>
     
               
@endsection