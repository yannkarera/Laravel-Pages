<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <title>Mon Blog Laravel</title>
</head>
<body>
  <header>
    @include('header')
  </header>
  <main>
    <div class="container py-5">
      <h2>Bienvenue sur mon blog</h2>
      <p>Ceci est la page d'accueil publique du projet d’atelier.</p>
      <hr>
    </div>
    <div class="container py-5">
      @guest
      <form action="/register" method="POST" id="registration-form">
        @csrf
        <h1 class="text-center">Sign up</h1>
                <div class="form-group">
                  <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                  <input name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" value="{{ old('username') }}" required/>
                </div>
                @error('username')
                <p class="alert alert-danger small liveValidateMessage">{{ $message }}</p>
                @enderror
     
                <div class="form-group">
                  <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                  <input name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" required value="{{ old('email') }}"/>
                </div>
                @error('email')
                <p class="alert alert-danger small liveValidateMessage">{{ $message }}</p>
                @enderror
              <div class="form-group">
                  <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                  <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" required/>
                </div>
                <div class="form-group">
                  <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                  <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" required/>
                </div>
     
                <div class="form-group">
                  <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
                  <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" required/>
                </div>
     
                <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up</button>
              </form>
     @endguest
    </div>
    
  </main>
  <footer>
    @include('footer')
  </footer>
</body>
</html>