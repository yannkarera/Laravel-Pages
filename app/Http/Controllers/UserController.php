<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username') ],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed', ],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        return redirect('/')->with('success', 'Votre compte a été créé avec succès ! Vous pouvez maintenant vous connecter.');
        auth()->login($user);
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt(['username' => $incomingFields['username'],
        'password' => $incomingFields['password']])) {
            return redirect('/welcome')->with('success', 'Vous êtes maintenant connecté !');

        } else {
            return redirect('/')->with('error', 'Login incorrect. Veuillez réessayer.');
        }
    }

    public function showConnectedHomepage(){
        if(auth()->attempt()){
            return "Vous êtes connecté en tant que " . auth()->user()->username;
        } else {
            return view('homepage-connected');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Vous êtes maintenant déconnecté !');
    }
};