<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Mon Blog Laravel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Bootstrap CDN (optionnel, mais pratique pour l’atelier) --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
  <header class="container py-3">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <h1 class="mb-0">Mon Blog Laravel</h1>
      <hr>
      <div class="ml-md-auto">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger small">{{ $error }}</div>
          @endforeach
        @endif
        @guest
          <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
            @csrf
            <input name="username" id="username" class="form-control form-control-sm mr-2 d-inline w-auto" type="text"
              placeholder="Username" />
            @error('username')
              <p class="alert alert-danger small liveValidateMessage">{{ $message }}</p>
            @enderror
            <input name="password" id="password" class="form-control form-control-sm mr-2 d-inline w-auto" type="password"
              placeholder="Password" />
            <button type="submit" class="btn btn-sm btn-success">Sign In</button>
          </form>
        @endguest
      </div>
    </div>
    @auth
      <div class="ml-md-auto d-inline-block">
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <form action="/logout" method="POST" class="mb-0 pt-2 pt-md-0">
          @csrf
          <a class="btn btn-sm btn-success" href="/posts/create">
            Créer un article
          </a>
          <button class="btn btn-sm btn-secondary">Se déconnecter</button>
        </form>
      </div>
      <div class="container d-flex justify-content-between align-items-center">
        <span>Bienvenue {{ auth()->user()->username }}</span>
      </div>
      </div>
    @endauth
  </header>
  @if(session()->has('success'))
    <div class="container container--narrow">
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    </div>
  @endif
  @if(session()->has('error'))
    <div class="container container--narrow">
      <div class="alert alert-danger">
        {{ session()->get('error') }}
      </div>
  @endif
</body>

</html>