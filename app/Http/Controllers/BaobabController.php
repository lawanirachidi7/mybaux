<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Baobab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BaobabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baobab= DB::table('baobab')->get()->first();
        return view('pages.baobab')->with('baobab',$baobab);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.baobab_add');
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
     * @param  \App\Models\Baobab  $baobab
     * @return \Illuminate\Http\Response
     */
    public function show(Baobab $baobab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baobab  $baobab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baobab= DB::table('baobab')->find($id);
        return view('pages.baobab_edit')->with('baobab',$baobab);;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baobab  $baobab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
            'contactsresponsable' => 'required',
            'responsable' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            $baobab = DB::table('baobab')->where('id', $id)->limit(1);
            $baobab->update($request->except('_method', '_token'));
            return redirect()->route('baobab.index')->with('success','Information modifier avec succès.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baobab  $baobab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baobab $baobab)
    {
        //
    }
}
