@extends('public.layout')

@section('content')

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
                    {{-- Feltétel: csak a publikus receptek legyenek itt: --}}
                    @if($recipe->public == 1)
                    <li>
                        <a href="{{ route('public.show', ['id' => $recipe->id]) }}">
                            {{ $recipe->name }}
                        </a>
                    </li>
                    @endif
                @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>

    <hr>

    <h3>A receptek összetevők szerint</h3>

    <table>
        <tr>
            <th></th>
            <th>Összetevők</th>
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
                    {{-- Feltétel: csak a publikus receptek legyenek itt: --}}
                    @if($recipe->public == 1)
                    <li>
                        <a href="{{ route('public.show', ['id' => $recipe->id]) }}">
                            {{ $recipe->name }}
                        </a>
                    </li>
                    @endif
                @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>

@endsection

