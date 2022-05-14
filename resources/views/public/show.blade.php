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
            <li>
                <a href="{{ route('public.details', ['id' => $recipe->id]) }}">
                    {{ $recipe->name }}
                </a>
                {{ $recipe->name }}
            </li>
        @endforeach
    </ul>

    <a href="{{ route('public.index') }}">
        Vissza
    </a>
@endsection
