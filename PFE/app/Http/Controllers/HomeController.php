<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
     
    if(auth()->user()->role != "Admin")
    {
        return view('user_dashboard');
    }
    else
    {
    return view('Admin_Dashboard');
    }
    
}

}
