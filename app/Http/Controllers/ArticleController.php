<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Baux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $baux=Baux::find($id);
        return view('pages.article_add')->with('baux', $baux);
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
            'article' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', ],
            'baux_id' => ['required', 'integer']

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            Article::create([
                'article' => $request['article'],
                'title' => $request['title'],
                'content' => $request['content'],
                'baux_id' => $request['baux_id'],
            ]);
    
            return redirect()->back()
                ->with('success','Article ajouté avec succès.');
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(), [
            'article' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', ],
            'baux_id' => ['required', 'integer']
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            dd("yes");
            $article->update($request->all()) ;       
            return redirect()->back()
                ->with('success','Article mise à jour avec succès.');
        }
    }

    public function delete($id)
    {
        $article = Article::find($id);
        return view('pages.article_delete', compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()
                        ->with('success','article retirer avec succès.');
    }
}
