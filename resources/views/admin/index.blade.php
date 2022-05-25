@extends('admin.layout')

@section('content')

    <hr>
    <h3>A 'simplekitchen' alkalmazás felhasználói</h3>
    <a href="{{ route('admin.users') }}">Felhasználók</a>

    <h3>A 'simplekitchen' alkalmazás ételkategóriái</h3>
    <a href="{{ route('admin.categories') }}">Ételkategóriák</a>

    <h3>A 'simplekitchen' alkalmazás recept-hozzávalói</h3>
    <a href="{{ route('admin.ingredients') }}">Hozzávalók</a>

@endsection
