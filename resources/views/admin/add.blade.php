@extends('admin.layout')

@section('content')
    <hr>
    <h3>Itt hozhat létre új hozzávalót:</h3>

    <form action="{{ route('admin.ingredients.store') }}" method="post">
        @csrf

        <label for="ingredient">Hozzávaló:</label>
        <input type="text" name="name" id="ingredient" size="50">
        <br>
        <br>
        <input type="submit" value="Elküld">
    </form>

    <hr>
    <a href="{{ route('admin.ingredients') }}">Vissza</a>

@endsection
