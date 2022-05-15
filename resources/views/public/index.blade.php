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

    <h3>Az oldalon elérhető receptek</h3>

    <table>
        <tr>
            <th></th>
            <th>Kategóriák</th>
            <th></th>
            <th>Receptek</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td></td>
            <td>{{ $category->name }}</td>
            <td></td>
            <td>
                <ul>
                @foreach($category->recipes as $recipe)
                    <li>
                        <a href="{{ route('public.details', ['id' => $recipe->id]) }}">
                            {{ $recipe->name }}
                        </a>
                    </li>
                @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>

@endsection

