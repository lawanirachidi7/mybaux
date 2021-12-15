<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Baobab;
use App\Models\Parties;
use Illuminate\Support\Facades\DB;
use App\Models\Baux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Baux= Baux::all();
        return view('pages.baux')->with('Baux', $Baux);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parties = Parties::all();
        $baobab = Baobab::all();
        return view('pages.baux_add')->with('parties',$parties)->with('baobab', $baobab);
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
            'titre_contract' => 'required',
            'numero_contract' => 'required',
            // 'partie_prenante' => 'required',
            // 'partie_adverse' => 'required',
            // 'date_debut ' => 'required',
            // 'date_fin' => 'required',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            Baux::create($request->except('_method', '_token'));
            // $baux::save($request->except('_method', '_token'));
            return redirect()->route('baux.index')->with('success','Nouvelle partie créer avec succes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baux  $baux
     * @return \Illuminate\Http\Response
     */
    public function show(Baux $baux)
    {
        $articles=Article::all();
        $parties = Parties::all();
        return view('pages.baux_show',compact('baux'))
            ->with('parties', $parties)
            ->with('articles', $articles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baux  $baux
     * @return \Illuminate\Http\Response
     */
    public function edit(Baux $baux)
    {
        $parties = Parties::all();
        $baobab = Baobab::all();
        $articles = Article::all();
        return view('pages.baux_edit',compact('baux'))->with('baobab', $baobab )
            ->with('parties', $parties )
            ->with('articles', $articles );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baux  $baux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baux $baux)
    { $validator = Validator::make($request->all(), [
        'titre_contract' => 'required',
        // 'numero_contract' => 'required',
        // 'partie_prenante' => 'required',
        // 'partie_adverse' => 'required',
        // 'date_debut ' => 'required',
        // 'date_fin' => 'required',
    ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            $baux->update($request->all());
            return redirect()->route('baux.index')->with('success','Partie mise à jour avec succès');
        }
    }

    public function delete($id)
    {
        $baux = Baux::find($id);

        return view('pages.baux_delete', compact('baux'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baux  $baux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baux $baux)
    {
        $baux->delete();
        return redirect()->route('baux.index')
                        ->with('success','Bails retirer avec succès.');
    }
}
