@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $recipe->user->name }}" ( {{ $recipe->user->email }} )!</h2>
    <hr>

    <h3>Itt szerkesztheti a kiválasztott receptet:</h3>
    <hr>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $recipe->id }}">
        Kategória:
        <label>{{ $recipe->category->name }}</label>
        <br>
        <br>

        <label for="name">Étel neve:</label>
        <input type="text" name="name" id="name" size="50" value="{{ $recipe->name }}">
        <br>
        <br>
        <label for="description">Leírás:</label>
        <textarea name="description" id="description" cols="50" rows="10">
            {{ $recipe->description }}
        </textarea>
        <br>
        <br>
        <label for="public">Publikus</label>
        <input type="radio" name="public" id="public" value={{ $recipe->public }}>
        <label for="public">Privát</label>
        <input type="radio" name="public" id="private" value={{ $recipe->public }}>
        <br>
        <br>

        <input type="submit" value="Elküld">
    </form>



@endsection
