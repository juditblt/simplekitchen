@extends('public.layout')

@section('content')

    <h3>A kiválasztott recept leírása</h3>

    <table>
        <tr>
            <th></th>
            <th>Étel neve</th>
            <th></th>
            <th>Leírás</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td></td>
                <td>{{ $recipe->name }}</td>
                <td></td>
                <td>{{ $recipe->description }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    <a href="{{ route('public.index') }}">
        Vissza
    </a>
@endsection
