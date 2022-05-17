@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $recipe->user->name }}" ( {{ $recipe->user->email }} )!</h2>
    <hr>

    <h3>A kiválasztott recept részletei:</h3>
    <hr>

    <table>
        <tr>
            <th>Kategória név</th>
            <th>Recept név</th>
            <th>Leírás</th>
            <th>Publ(1)/Priv(0)</th>
            <th>Hozzávalók</th>
            <th>Törlés</th>
        </tr>
            <tr>
                <td>{{ $recipe->category->name }}</td>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->description }}</td>
                <td>{{ $recipe->public }}</td>
                <td>
                    <ul>
                        @foreach($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <form action="{{ route('private.delete', ['id' => $recipe->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $recipe->id }}">
                        <input type="submit" value="Törlés">
                    </form>
                </td>
            </tr>
    </table>
    <br>
    <br>

    <a href="{{ route('private.edit', ['id' => $recipe->id]) }}">
        Szerkesztés
    </a>
    <br>

    <hr>

    <a href="{{ route('private.home') }}">
        Vissza
    </a>
@endsection

