@include('header')
@section ('content')
<div class="container py-5"> 
    <h1>Créer un article</h1>

    <form action="/posts" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Contenu</label>
            <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Créer l'article</button>
    </form>
@include('footer')