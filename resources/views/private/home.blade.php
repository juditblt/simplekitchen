@extends('private.layout')

@section('content')
    <hr>
    <nav class="row justify-content-center m-3">
        <ul class="nav">
            <li class="nav-item mx-auto">
            <span class="navbar-brand fs-2 align-middle">Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</span>
            </li>
            <li class="nav-item mx-auto">
                <a class="btn btn-primary" href="{{ route('private.create') }}">Új recept felvétele</a>
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
            <h3>Itt láthatja az összes receptjét:</h3>

            <table class="table table-sm">
                <tr>
                    <th>Kategória név</th>
                    <th>Recept név</th>
                    <th class="text-center">Priv(0)/Publ(1)</th>
                    <th class="text-center">Részletek</th>
                </tr>
                @foreach($recipes as $recipe)
                    <tr>
                        <td class="align-middle">{{ $recipe->category->name }}</td>
                        <td class="align-middle">{{ $recipe->name }}</td>
                        <td class="text-center align-middle">{{ $recipe->public }}</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-warning m-2" href="{{ route('private.details', ['id' => $recipe->id]) }}">Részletek</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
