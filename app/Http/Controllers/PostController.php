<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:10',
        ]);

        $incomingFields['user_id'] = auth()->id();

        \App\Models\Post::create($incomingFields);

        return redirect('/welcome')->with('success', 'Article créé avec succès !');
    }
}
