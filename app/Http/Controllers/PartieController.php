<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartieController extends Controller
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
        return view('pages.parties');
    }

    public function add()
    {
        return view('pages.parties_add');
    }

    public function edit()
    {
        return view('pages.parties_edit');
    }
    
}