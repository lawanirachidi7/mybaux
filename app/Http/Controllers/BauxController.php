<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BauxController extends Controller
{
    public function index()
    {
        return view('pages.baux');
    }
    public function add()
    {
        return view('pages.baux_add');
    }
    public function edit()
    {
        return view('pages.baux_edit');
    }
}
