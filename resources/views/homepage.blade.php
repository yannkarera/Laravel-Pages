<!doctype html>
<html lang="fr">
<head><meta charset="utf-8">
  <title>{{ $title ?? 'Accueil' }}</title>
</head>
<body>
  <h1>Homepage</h1>
  <nav>
    <a href="{{ route('home') }}">Accueil</a> |
    <a href="{{ route('about') }}">À propos</a>
  </nav>
  <h2>{{ $name }}</h2>
  <ul>
    @foreach($allFruits as $fruit)
      <li>{{ $fruit}}</li>
    @endforeach
  </ul>
</body>
</html>