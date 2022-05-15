@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</h2>
    <hr>

    <h3>Itt hozhat létre új receptet:</h3>
    <hr>

    <form action="{{ route('private.store') }}" method="post">
        @csrf

        <label for="category">Kategória:</label>
        <select name="category_id" id="category">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="name">Étel neve:</label>
        <input type="text" name="name" id="name" size="50">
        <br>
        <br>
        <label for="description">Leírás:</label>
        <textarea name="description" id="description" cols="50" rows="10"></textarea>
        <br>
        <br>
        <label for="public">Publikus</label>
        <input type="radio" name="public" id="public" value="1">
        <label for="public">Privát</label>
        <input type="radio" name="public" id="private" value="0">
        <br>
        <br>
        <input type="submit" value="Elküld">
    </form>



@endsection
