@extends('public.layout')

@section('content')

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

    <hr>

    <table>
        <tr>
            <th></th>
            <th>Leírás</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td></td>
                <td>{{ $recipe->description }}</td>
            </tr>
        @endforeach
    </table>


@endsection
