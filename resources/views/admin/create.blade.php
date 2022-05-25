@extends('admin.layout')

@section('content')
    <hr>
    <h3>Itt hozhat létre új kategóriát:</h3>

    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf

        <label for="category">Kategória:</label>
        <input type="text" name="name" id="category" size="50">
        <br>
        <br>
        <input type="submit" value="Elküld">
    </form>

    <hr>
    <a href="{{ route('admin.categories') }}">Vissza</a>

@endsection
