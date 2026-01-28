<?php
namespace App\Http\Controllers;
 
class ExampleController extends Controller
{
public function homepage()
    {
        return view('homepage', ['title' => 'Accueil']);
    }
 
public function about()
    {
        return view('about', ['title' => 'À propos']);
    }
}


 