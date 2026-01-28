<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ auth()->user()->username }} - Mon Blog Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        @include ('header')
    </header>
    
    <div class="container py-md-5 container--narrow">
        <div class="text-center"></div>
            <h2>Bonjour <strong>{{ auth()->user()->username }}</strong>, vous n'avez pas d'articles !</h2>
            <p class="lead text-muted">Ici vous aurez les dernieres publications</p>
        </div>
    </div>
    <footer>
        @include ('footer')
    </footer>
    
</body>
</html>