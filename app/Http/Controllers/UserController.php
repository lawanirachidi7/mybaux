<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users');
    }
    public function add()
    {
        return view('pages.users_add');
    } 
    public function edit()
    {
        return view('pages.users_edit');
    }
}
