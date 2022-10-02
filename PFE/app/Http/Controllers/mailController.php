<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
class MailController extends Controller
{
 public function send(request $request)
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
$name = $request->Lastname . " " . $request->Firstname;
     $token = Str::random(32);
        $user = new User();
        $user -> firstname = $request->Firstname;
        $user -> lastname = $request->Lastname;
        $user -> deleted = 0;
        $user -> active = 1;
        $user -> name = $name;
        $user -> displayname = $name;
        $user -> role = $request -> Role;
        $user -> noip_login_enabled = 0;
        $user -> access_key = $token;
        $user -> email = $request -> Email;
        $user -> confirmed = 0;
        $user -> save();
      return redirect('/users/list')->withStatus(' User Added Successfully!!!! '); 
     }
   }

 }

