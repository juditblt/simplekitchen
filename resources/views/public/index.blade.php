@extends('public.layout')

@section('content')

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

    <h3>Kategóriák:</h3>

    <table>
        @foreach($categories as $category)
        <tr>
            <td></td>
            <td>
                <a href="{{ route('public.show', ['id' => $category->id]) }}">
                    {{ $category->name }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
   {{--
    <ul>
        @foreach($recipes as $recipe)
            <li>{{ $recipe->name }}</li>
        @endforeach
    </ul>
    --}}
@endsection

