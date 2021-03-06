<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }  
    
    public function lock()
    {
        return view('pages.lock_screen');
    } 
    
    public function login()
    {
        return view('auth.login');
    }
    public function login2()
    {
        return view('auth.login2');
    }


}
