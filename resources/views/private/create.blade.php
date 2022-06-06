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
        <div class="col-sm-12 col-md-6 m-2">
            <h3>Itt hozhat létre új receptet:</h3>

            <form class="row" action="{{ route('private.store') }}" method="post">
                @csrf
                <div class="col-md-12 gy-2">
                    <label for="category" class="form-label">Kategória:</label>
                    <select name="category_id" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12 gy-2">
                    <label for="name" class="form-label">Étel neve:</label>
                    <input type="text" class="form-control" name="name" id="name" size="50">
                </div>
                <div class="col-md-12 gy-2">
                    <label for="description" class="form-label">Leírás:</label>
                    <textarea name="description" class="form-control" id="description" cols="50" rows="10"></textarea>
                </div>

                <div class="col-md-12 gy-2">
                    <span class="fs-6">Láthatóság: Priv(0)/Publ(1) /Kötelező bejelölni!/</span>
                    <div>
                        <label for="public">Privát</label>
                        <input type="radio" name="public" id="private" value="0">
                        <label for="public">Publikus</label>
                        <input type="radio" name="public" id="public" value="1">
                    </div>
                </div>

                <div class="col-md-12 gy-2">
                    <label for="ingredient" class="form-label">Kategória:</label>
                    (Ctrl + kattintással többet is választhat!)

                    <select name="ingredient_id" id="ingredient" multiple>
                        @foreach($ingredients as $ingredient)
                        <option value="{{ $ingredient->id  }}">
                            {{$ingredient->name}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="row g-3 mx-1">
                    <div class="col-md-4">
                        <input type="submit" class="form-control btn btn-primary" value="Elküld">
                    </div>
                </div>

            </form>
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
