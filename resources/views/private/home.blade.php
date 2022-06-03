@extends('private.layout')

@section('content')
    <hr>
    <section class="row">
        <div class="col-sm-12 col-md-8 m-2">
            <h2>Üdvözöljük "{{ $user->name }}" ( {{ $user->email }} )!</h2>

            @if($user->role == 'admin')
                <a class="btn btn-primary" href="{{ route('admin') }}">Adminisztrátor kezdő oldal</a>
            @endif


            <a class="btn btn-primary" href="{{ route('private.create') }}">Új recept felvétele</a>
        </div>
    </section>

    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <h3>Itt láthatja az összes receptjét:</h3>

            <table class="table table-sm">
                <tr>
                    <th>Kategória név</th>
                    <th>Recept név</th>
                    <th>Publ(1)/Priv(0)</th>
                    <th>Részletek</th>
                </tr>
                @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->category->name }}</td>
                        <td>{{ $recipe->name }}</td>
                        <td>{{ $recipe->public }}</td>
                        <td>
                            <a href="{{ route('private.details', ['id' => $recipe->id]) }}">Részletek</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
