<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Response;
use App\Rules\CurrentPasswordCheckRule;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }


    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));
        $user -> updated_at =now();
        return redirect()->route('user-list')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id , request $request)
    {
	$user = User::findOrfail($id);
    $delete = $request->input('DeleteStatusButton');
    $ButtonStatus = (int)($delete);
    if ( $ButtonStatus == 0) {
    DB::table('users')->where('id',$request->id)->update(['deleted' => 1]);
    DB::table('users')->where('id', $request->id)->delete();
    return redirect()->back()->withStatus(__('User successfully deleted.'));
    }
 
    }

    public function addUser()
    {
        if(auth()->user()->role != "User")
        {
            return view('pages.user_add');
        }
        else {
            return redirect('/home');
        }
    }
 public function SaveUser(request $request)
 {
    
        //validation rules
        $rules = array(
         'Lastname'=>'required',
         'Firstname'=>'required',
         'Email'=>'required|unique:users,email',
         'IpAdresses'=>'required|ipv4',
         'Role'=>'required'
     );
     // validate against the inputs from our form
     $validator = Validator::make(Input::all(), $rules);
     // check if the validator failed -----------------------
     if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return redirect()->back()->withErrors($validator)->withInput();    
     }
     else 
     {
$name = $request->Firstname . " " . $request->Lastname;
     $token = Str::random(32);
        $user = new User();
        $user -> firstname = $request->Firstname;
        $user -> lastname = $request->Lastname;
        $user -> deleted = 0;
        $user -> active = 1;
        $user -> name = $name;
        $user -> displayname = $request->Firstname;
        $user -> role = $request -> Role;
        $user -> noip_login_enabled = 0;
        $user -> access_key = $token;
        $user -> email = $request -> Email;
        $user -> confirmed = 0;
        $user -> save();
      return redirect('/users/list')->withStatus(' User Added Successfully!!!! '); 
     }
   }



public function StatusChange($id ,  request $request)
{
$active = $request->input('ActiveStatusButton');

$StatusQuerry =  DB::select(  DB::raw('SELECT active FROM `users`')
    );
$Status = (int)($StatusQuerry);
$ButtonStatus = (int)($active);

 if ( $ButtonStatus == $Status) {

 DB::table('users')->where('id',$request->id)->update(['active' => 0]);
  return redirect()->back()->withStatus(__('User Desactivated.'));
  }

else if ($ButtonStatus == 0) {
{
 DB::table('users')->where('id',$request->id)->update(['active' => 1]);

return redirect()->back()->withStatus(__('User Reactivated.'));
}      
}
}



public function ShowSearchPage()
{ 
$result = User::All();
if(auth()->user()->role != "User")
        {
return view('pages.search',compact('result'));

}
else {
return redirect('/home');
}
}

 public function FindUser(request $request)
 {
 $name = $request->input('name');
$result = User::All();
 if ($request->has('name')) {

$result = DB::table('users')->where('firstname',$name)->orWhere('lastname',$name)->get();

 }

 return view('pages.search_results',['result'=> $result]);
 }





    public function showConfirmPage($access_key)
    {
        $user = User::where('access_key', $access_key)->first();
        if(!is_null($user))
        {
            if($user->confirmed==0)
            {
                return view('user-create',compact('user'));
            }
            else {
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/home');
        }

    }
    public function confirm(request $request)
    {
        //validation rules
        $rules = array(
            'Lastname'=>'required',
            'Firstname'=>'required',
            'DisplayName'=>'required',
            'Username'=>'required',
            'Password'=>'required',
            'PasswordConfirm'=>'required|same:Password',
        );
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $email = $request->Email;
            $user = User::where('email',$email)->first();
            $user -> name = $request -> Username;
            $user -> firstname = $request -> Firstname;
            $user -> lastname = $request -> Lastname;
            $user -> displayname = $request -> DisplayName;
            $user -> password = Hash::make($request -> Password );
            $user -> confirmed = 1;

            $user-> save();
            return redirect('/home');
        }
    }
    
 public function ShowUserUpdatePage($id) {
  $users = User::where('id',$id)->first();
 return view('pages.update_user',['users'=>$users]);
 }




public function updateInfo(request $request)
    {

        $id = auth()->user()->id;
        //validation rules
        $rules = array(
            'Lastname'=>'required',
            'Firstname'=>'required',
            'Name'=>'required',
            'Displayname'=>'required',
            'Email'=>'required|email|unique:users,email,'.$id
        );
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $array = [
                'lastname' => $request->Lastname,
                'firstname' => $request->Firstname,
                'name' => $request->Name,
                'displayname' => $request->Displayname,
                'email' => $request->Email,
                'updated_at' => now()
            ];
            DB::table('users')->where('id',$id)->update($array);
            return back()->withStatus(__('Informations Updated!'));
        }

    }
    public function updatePasswd(request $request)
    {
        $id = auth()->user()->id;
        //validation rules
        $rules = array(
            'old_password'=>['required', new CurrentPasswordCheckRule],
            'password'=>'required',
            'password_confirmation'=>'required|same:password'
        );
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $passwd = Hash::make($request->get('password'));
            $array = ['password'=> $passwd];
            DB::table('users')->where('id',$id)->update($array);
            return back()->withStatusPassword(__('Mot de passe modifié!'));
        }

    }

    public function listAll(request $request)
    { 
        if(auth()->user()->role != "User")
        {
            $users = User::all();
            return view('pages.user_list',['users'=>$users]);
        }
        else {
            return redirect('/home');
        }
    }

    public function view()
    {
        if(auth()->user()->role != "User")
        {
            $users = User::all();
            return view('pages.list-auditor',['users'=>$users]);
        }
        else {
            return redirect('/home');
        }
    }

    public function findAllJson()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function UpdateUser($id , request $request)
    {
      
            $array = [
             'firstname' => $request->Firstname,
                'lastname' => $request->Lastname,
                'email' => $request->Email,
            	'role' => $request->Role,
                'updated_at' => now()
            ];
            DB::table('users')->where('id',$id)->update($array);
            return back()->withStatus(__('Informations Updated!'));
        

    }


}