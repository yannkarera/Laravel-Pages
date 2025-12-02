<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExampleController extends Controller
{
    Public function homepage(){
        return view('homepage');
    }
    Public function AboutPage(){
        return view('about');
    }
}
