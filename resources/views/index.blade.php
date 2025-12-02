@extends('layouts.app')

@section('title', 'Liste des fruits')

@section('content')
    <h1 class="mb-4">Liste des fruits</h1>

    <ul class="list-group">
        @foreach($allFruits as $fruit)
            <li class="list-group-item">{{ $fruit }}</li>
        @endforeach
    </ul>
@endsection
