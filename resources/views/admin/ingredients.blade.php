@extends('admin.layout')

@section('content')
    <hr>
    <a href="{{ route('admin.ingredients.add') }}">Új hozzávaló felvétele</a>
    <a href="{{ route('admin') }}">Vissza</a>
    <hr>
    <h3>A 'simplekitchen' alkalmazás recept-hozzávalói</h3>

    <table>
        <tr>
            <th></th>
            <th>Hozzávalók</th>
            <th></th>
            <th>Receptek</th>
        </tr>
        @foreach($ingredients as $ingredient)
            <tr>
                <td></td>
                <td>{{ $ingredient->name }}</td>
                <td></td>
                <td>
                    <ul>
                        @foreach($ingredient->recipes as $recipe)
                            <li>{{ $recipe->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

