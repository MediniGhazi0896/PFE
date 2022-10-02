<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class UpdateLastSignInAt
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;
        DB::table('login')
        ->insert([
                 'id_user' => $user->id ,
                'time'    => date('Y-m-d H:i:s'),
                'action'  =>'login',
                'ip' => \Request::ip()
                ]);
 
    }
}
