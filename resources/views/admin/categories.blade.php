@extends('admin.layout')

@section('content')
    <hr>
    <nav class="row justify-content-center m-3">
        <ul class="nav">
            <li class="nav-item mx-auto">
                <a class="btn btn-primary" href="{{ route('admin') }}">Adminisztrátor kezdő oldal</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Új kategória felvétele</a>
            </li>
        </ul>
    </nav>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <h3>A 'simplekitchen' alkalmazás ételkategóriái</h3>
            <table class="table table-sm">
                <tr>
                    <th>Kategóriák</th>
                    <th>Receptek</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <ul>
                                @foreach($category->recipes as $recipe)
                                    <li>{{ $recipe->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
