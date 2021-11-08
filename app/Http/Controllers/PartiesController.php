<?php

namespace App\Http\Controllers;

use App\Models\Parties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties=Parties::all();
        return view('pages.parties')->with("parties",$parties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.parties_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raison_social' => 'required',
            'rccm' => 'required',
            'ifu' => 'required',
            'capital' => 'required',
            'siege' => 'required',
            'contact' => 'required',
            'domaine_activite' => 'required',
            'email' => 'email',
            'contact_responsable' => 'required',
            'responsable' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            Parties::create($request->all());
            return redirect()->route('parties.index')->with('success','Nouvelle partie créer avec succes');
        }
    }
    
     public function show( $id)
    {
        $partie=Parties::find($id);
        return view('pages.parties_show')->with('parties' , $partie);
    }

    
    public function edit($id)
    {
        $partie=Parties::find($id);
        return view('pages.parties_edit')->with('partie' , $partie);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parties  $parties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'raison_social' => 'required',
            'rccm' => 'required',
            'ifu' => 'required',
            'capital' => 'required',
            'siege' => 'required',
            'contact' => 'required',
            'domaine_activite' => 'required',
            'email' => 'email',
            'contact_responsable' => 'required',
            'Responsable' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            $Parties = Parties::find($id);
            dd($Parties);
        $Parties->update($request->all());
            return redirect()->route('parties.index')->with('success','partie mise à jour avec succes');
        }
    }

    public function delete($id)
    {
        $parties = Parties::find($id);

        return view('pages.parties_delete', compact('parties'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parties  $parties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parties = Parties::find($id);
        $parties->delete();
        return redirect()->route('parties.index')
                        ->with('success','parties retirer avec succès.');
    }

 }
