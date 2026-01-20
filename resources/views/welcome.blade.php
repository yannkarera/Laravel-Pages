<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'À propos' }}</title>
</head>
<body>
  <h1>À propos</h1>
 
 
  <nav>
    <a href="{{ route('home') }}">Accueil</a> |
    <a href="{{ route('about') }}">À propos</a>
  </nav>
 
</body>
</html>