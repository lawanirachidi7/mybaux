<?php

namespace App\Http\Controllers;

use App\Models\Parties;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  
    public function index()
    {
        $users= User::all();
        return view('pages.users')->with('users',$users);
    }
    public function create()
    {
        return view('pages.users_add');
    }
  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'privilege' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:8']

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error','Formulaire invalide! Merci de bien remplir les champs');
        }else{
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'privilege' => $request['privilege'],
                'statut' => "1",
                'password' => Hash::make($request['password']),
            ]);
    
            return redirect()->route('user.index')
                ->with('success','Utilisateur ajouter avec succès.');
    
        }
    }

    public function edit(User $user)
    {
        return view('pages.users_edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
       
        $user->update($request->all());
    
        return redirect()->route('user.index')
                        ->with('success','Mise à jour effectué avec succès');
    }

    public function active(Request $request, $id)
    {
        $User = User::find($id);

        $User->statut="1";
        $User->update();
        return redirect()->route('user.index')
                        ->with('success','Activation effectué avec succès');
    }
    public function desactive(Request $request, $id)
    {
        $User = User::find($id);
        $User->statut="0";
        $User->update();
        return redirect()->route('user.index')
                        ->with('success','Désactivation effectuée avec succès');
    }

   
   
    
    public function show(User $user)
    {
     
        return view('pages.users_show',compact('user'));
    }

    public function delete($id)
    {
        $user = User::find($id);

        return view('pages.users_delete', compact('user'));
    }

    public function destroy(User $user) 
    {
        $user->delete();
        return redirect()->route('user.index')
                        ->with('success','Compte retirer avec succès.');
    }

    

}