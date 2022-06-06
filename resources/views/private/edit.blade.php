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
            <h3>Itt szerkesztheti a kiválasztott receptet:</h3>

            <form class="row" action="{{ route('private.update', ['id' => $recipe->id]) }}" method="post">
                @csrf
                <div class="col-md-12 gy-2">
                    <input type="hidden" class="form-control" name="id" value="{{ $recipe->id }}">
                    <label class="form-label">Kategória: {{ $recipe->category->name }}</label>
                </div>

                <div class="col-md-12 gy-2">
                    <label for="name" class="form-label">Étel neve:</label>
                    <input type="text" class="form-control" name="name" id="name" size="50" value="{{ $recipe->name }}">
                </div>

                <div class="col-md-12 gy-2">
                    <label for="description" class="form-label">Leírás:</label>
                    <textarea name="description"  class="form-control" id="description" cols="50" rows="10">
                        {{ $recipe->description }}
                    </textarea>
                </div>

                <div class="col-md-12 gy-2 form-group">
                    <span class="fs-6">Láthatóság: Priv(0)/Publ(1) /Kötelező bejelölni!/</span>

                    <div class="form-check">
                        <label for="priv" class="form-check-label">0</label>
                        <input type="radio" class="form-check-input" name="publ_priv" id="priv" value="0"
                        {{ $recipe->public == '0' ? 'checked' : '' }}>

                    </div>
                    <div class="form-check">
                        <label for="publ" class="form-check-label">1</label>
                        <input type="radio" class="form-check-input" name="publ-priv" id="publ" value="1"
                        {{ $recipe->public == '1' ? 'checked' : '' }}>

                    </div>
                </div>

                <div class="col-md-12 gy-2">
                    <table class="table table-sm">
                        <tr>
                            <th>Hozzávaló</th>
                            <th>Mennyiség</th>
                            <th class="text-center">Egység</th>
                        </tr>
                        @foreach($recipe->ingredients as $ingredient)
                        <tr>
                            <input type="hidden" class="form-control" name="ingr_id[]" value="{{ $ingredient->pivot->recipe_id }}">
                            <td>{{ $ingredient->name }}</td>
                            <td>
                                <input type="number" class="form-control" name="quantity[]" id="quantity" value="{{ $ingredient->pivot->quantity }}">
                            </td>
                            <td class="text-center">{{ $ingredient->pivot->unit }}</td>
                        </tr>
                        @endforeach
                    </table>
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
