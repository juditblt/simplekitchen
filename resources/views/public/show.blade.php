@extends('public.layout')

@section('content')

    <h3>A kiválasztott recept leírása</h3>

    <table>
        <tr>
            <th></th>
            <th>Étel neve</th>
            <th></th>
            <th>Leírás</th>
            <th></th>
            <th>Hozzávalók</th>
        </tr>
            <tr>
                <td></td>
                <td>{{ $recipe->name }}</td>
                <td></td>
                <td>{{ $recipe->description }}</td>
                <td></td>
                <td>
                    <ul>
                        @foreach($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
    </table>
    <br>
    <hr>

    <a href="{{ route('public.index') }}">
        Vissza
    </a>
@endsection
