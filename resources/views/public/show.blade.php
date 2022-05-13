@extends('public.layout')

@section('content')

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

    <h3>{{ $category->name }}</h3>

    <ul>
        @foreach($recipes as $recipe)
            <li>{{ $recipe->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('public.index') }}">
        Vissza
    </a>
@endsection
