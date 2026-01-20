<?php
namespace App\Http\Controllers;
 
class ExampleController extends Controller
{
public function home()
    {
        return view('home', ['title' => 'Accueil']);
    }
 
public function about()
    {
        return view('about', ['title' => 'À propos']);
    }
}

 