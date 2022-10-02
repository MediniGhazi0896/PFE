@extends('layouts.app', ['activePage' => 'auditor-list', 'titlePage' => __('list Physical')])

@section('content')
<div class="content">
<div class="container-fluid">
<!-- Number of lines Shown -->


<!-- Search Area -->



<!-- Table -->

  
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
        <div>
          <table class="table table-striped table-bordered dataTable no-footer" id="Physical_table" role="grid" aria-describedby="Physical_table_info">
            <thead>
              <tr>
			
                <th>
                  Name
                </th>
                <th>
                  Firstname
                </th>
				<th>
                  Lastname
                </th>
                <th>
                  Email
                </th>
                <th>
                  Role
                </th>
                <th>
                  Displayname
                </th>
				<th>
				active
				</th>
				<th>
				 deleted
				</th>
                <th>
                  Modify
                </th>
				  <th>
                  Download PDF
                </th>
  				<th>
                  Desactivate
                </th>
              </tr>
            </thead>
            @foreach ($users as $user)
            <tr>
			<td>
				{{$user->name}}
			</td>
              <td>
                {{$user->firstname}}
              </td>
              <td>
                {{$user->lastname}}
              </td>
                 <td>
                {{$user->email}}
              </td>
              <td>
                {{$user->role}}
              </td>
               <td>
                {{$user->displayname}}
              </td>
               <td>
                {{$user->active}}
              </td>
              <td>
                {{$user->deleted}}
              </td>
               <td>
                 <div align="center">
                          <form  action="{{action('UserController@updateInfo',$user)}}" method="POST">
                           <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            @method('POST') 
                    
                            <button type="submit" class="btn btn-block btn-success">
                                     Modify
                            </button>
                    
                              </form>
                        </div>
              </td>       
              <td>
              <div align="center">
                              <form  action="{{action('UserController@destroy' , $user->id)}}" method="POST">  {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button name="DeleteStatusButton" type="submit" class="btn btn-block btn-danger" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''" value={{"$user->deleted"}}>
                                @if ($user->deleted==0)
                                 Delete
                                @else
                                   Restore
                                    @endif
                                </button>
                               
                            </div>
                            </form>
                        </div>
              </td>
             <td>
                <div align="center">
                            
                            <form  action="{{action('UserController@StatusChange' , $user->id )}}" method="POST">  {{ csrf_field() }} {{ method_field('POST') }}
                                <button  name="ActiveStatusButton" class="btn btn-block btn-warning" onclick="confirm('{{ __("Are you sure .. ?") }}') ? this.parentElement.submit() : ''" value="{{$user->active}}">
                            
                                    @if ($user->active==1)
                                        Désactivate
                                    @else
                                        Reactivate
                                    @endif
                                </button>
                            </div>
                            </form>
                                </div>
              </td>
            </tr>
            @endforeach 
         
         
          </table>
 
</a>
</li>
</ul>
</div>
</div>
</div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
