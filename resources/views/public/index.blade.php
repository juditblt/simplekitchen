@extends('public.layout')

@section('content')
    <h3>Itt lesznek a kategóriákba rendezett receptek</h3>

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

@endsection

