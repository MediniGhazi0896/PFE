<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use Illuminate\Support\Str;
use App\User;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request )
    {
        $name = $request->Lastname . " " . $request->Firstname;
        $token = Str::random(32);
        $url = "http://192.168.188.128:8558/users/confirm/" . $token;
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
        return $this->view('mail',['name'=>$name,'token'=>$url])->to($request->Email);

    }
}
