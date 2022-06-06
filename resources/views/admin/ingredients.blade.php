@extends('admin.layout')

@section('content')
    <hr>
    <nav class="row justify-content-center m-3">
        <ul class="nav">
            <li class="nav-item mx-auto">
                <a class="btn btn-primary" href="{{ route('admin') }}">Adminisztrátor kezdő oldal</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="btn btn-primary" href="{{ route('admin.ingredients.add') }}">Új hozzávaló felvétele</a>
            </li>
        </ul>
    </nav>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <h3>A 'simplekitchen' alkalmazás recept-hozzávalói</h3>
            <table class="table table-sm">
                <tr>
                    <th>Hozzávalók</th>
                    <th>Receptek</th>
                </tr>
                @foreach($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->name }}</td>
                        <td>
                            <ul>
                                @foreach($ingredient->recipes as $recipe)
                                <li> {{ $recipe->name }} </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection

