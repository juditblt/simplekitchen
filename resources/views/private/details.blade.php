@extends('private.layout')

@section('content')
    <hr>
    <nav class="row justify-content-center m-3">
        <ul class="nav">
            <li class="nav-item mx-auto">
                <span class="navbar-brand fs-2 align-middle">Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</span>
            </li>
            <li class="nav-item mx-auto">
                @if($user->role == 'admin')
                    <a class="btn btn-primary" href="{{ route('admin') }}">Adminisztrátor kezdő oldal</a>
                @endif
            </li>
        </ul>
    </nav>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <h3>A kiválasztott recept részletei:</h3>

            <table class="table table-sm">
                <tr>
                    <th>Kategória név</th>
                    <th>Recept név</th>
                    <th>Leírás</th>
                    <th class="text-center">Publ(1)/Priv(0)</th>
                    <th class="text-center">Hozzávalók</th>
                    <th class="text-center">Szerkesztés</th>
                    <th class="text-center">Törlés</th>
                </tr>
                    <tr>
                        <td class="align-middle">{{ $recipe->category->name }}</td>
                        <td class="align-middle">{{ $recipe->name }}</td>
                        <td class="align-middle">{{ $recipe->description }}</td>
                        <td class="text-center align-middle">{{ $recipe->public }}</td>
                        <td class="text-center align-middle">
                            <ul>
                                @foreach($recipe->ingredients as $ingredient)
                                    <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-warning btn-sm" href="{{ route('private.edit', ['id' => $recipe->id]) }}">
                                Szerkesztés
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <form action="{{ route('private.delete', ['id' => $recipe->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $recipe->id }}">
                                <input class="btn btn-danger btn-sm" type="submit" value="Törlés">
                            </form>
                        </td>
                    </tr>
            </table>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary m-2" href="{{ route('private.home') }}">
                Vissza
            </a>
        </div>
    </section>

@endsection

