<?php

namespace App\Http\Controllers;

use App\Models\Privileges;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $privileges =Privileges::all();
        return view('Privileges')->with('privileges',$privileges);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privileges  $privileges
     * @return \Illuminate\Http\Response
     */
    public function show(Privileges $privileges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privileges  $privileges
     * @return \Illuminate\Http\Response
     */
    public function edit(Privileges $privileges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privileges  $privileges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privileges $privileges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privileges  $privileges
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privileges $privileges)
    {
        //
    }
}
