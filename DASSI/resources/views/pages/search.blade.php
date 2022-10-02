
@extends('layouts.app', ['activePage' => 'user_find', 'titlePage' => __('Download Form')])


@section ('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<div class='navbar-form'>
         <form action="{{action('UserController@ShowSearchPage')}}" method="POST">
 @csrf

            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Search User </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                   
                </div>
                 
                             <!-- User Search  -->
                      <p> </p>     
                     <p> </p> 
                     <p> </p> 
                   
    				
                     <p> </p>
                   <!-- User name Div -->
                    
                       <div class="col-sm-12">
                    <label for="name"> User Name </label>
                      <input type="text" class="form-control pl-5"  name="name" id="name" >
                    </div>
                   
                         <p> </p>     
                     <p> </p> 
                     <p> </p>
                         </div> 
                  	 <!-- Submit button -->
              <button type="submit" class="btn btn-block btn-primary">Search</button>                       
                                     
 </form>
                    
                   
        </div>
      </div>
    </div>
  </div>
 
@endsection       