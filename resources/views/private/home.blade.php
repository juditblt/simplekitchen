@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</h2>
    <hr>
    <h3>Itt láthatja az összes receptjét:</h3>
    <hr>

    <table>
        <tr>
            <th>Kategória név</th>
            <th>Recept név</th>
            <th>Leírás</th>
            <th>Publikus(1)/Privát(0)</th>
            <th>Létrehozva</th>
            <th>Módosítva</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->category->name }}</td>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->description }}</td>
                <td>{{ $recipe->public }}</td>
                <td>{{ $recipe->created_at }}</td>
                <td>{{ $recipe->updated_at }}</td>
            </tr>
        @endforeach
    </table>

@endsection
