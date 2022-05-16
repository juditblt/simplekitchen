@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</h2>
    <hr>

    <h3>A kiválasztott recept részletei:</h3>
    <hr>

    <table>
        <tr>
            <th>Kategória név</th>
            <th>Recept név</th>
            <th>Leírás</th>
            <th>Publ(1)/Priv(0)</th>

        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->category->name }}</td>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->description }}</td>
                <td>{{ $recipe->public }}</td>

            </tr>
        @endforeach
    </table>

    <hr>

    <a href="{{ route('private.home') }}">
        Vissza
    </a>
@endsection
