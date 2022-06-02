@extends('public.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-6">
            <h3>A kiválasztott recept leírása</h3>

            <table class="table">
                <tr>
                    <th></th>
                    <th>Étel neve</th>
                    <th></th>
                    <th>Leírás</th>
                    <th></th>
                    <th>Hozzávalók</th>
                </tr>
                    <tr>
                        <td></td>
                        <td>{{ $recipe->name }}</td>
                        <td></td>
                        <td>{{ $recipe->description }}</td>
                        <td></td>
                        <td>
                            <ul>
                                @foreach($recipe->ingredients as $ingredient)
                                    <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
            </table>
        </div>
    </section>
    <hr>
    <section class="row justify-content-center">
        <div class="col-6">
            <a class="btn btn-info" href="{{ route('public.index') }}">
                Vissza
            </a>
        </div>
    </section>

@endsection
