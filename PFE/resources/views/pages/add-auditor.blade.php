@extends('layouts.app', ['activePage' => 'audit-add', 'titlePage' => __('Add auditor')])


@section ('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<div class='navbar-form'>
        <form action="{{action('AuditorController@createAuditor')}}" method="POST">
            <div class="card">
                <div class=" card-header card-header-primary">
                    <h4 class="card-title ">Add Expert Auditor </h4>
                    <p class="card-category">Enter The Following Informations : </p>
                    <p> * : Required  </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @csrf
                    
                    <!-- ID div -->
                    <div class="form-group mt-3">
                      <input type="text" class="form-control pl-5"  name="id" id="id" hidden>
                    </div>
                    
                    <!-- Person Type Div -->
                    
                    <div class="form-group mt-3">
                    <label for="person_type"   class="font-weight-bold">  * Person Type :  </label>
                     <select class="form-control pl-5" name="person_type" id="person_type" required>
                                <option value="Moral Person">
                                   Moral Person
                                </option>
                                <option value=" Physical Person">
                                  Physical Person   
                                </option>   
                            </select>
                         @error('person_type')
						<div class="alert alert-danger"> Allready Used !!! </div>
						@enderror
    				</div>
                  
                    
                  
                </div>
                </div>
            </div> 
          					
                  <button type="submit" class="btn btn-block btn-primary">Add</button>          
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
               	 <!-- Submit button -->
                             
                             
                             
@endsection