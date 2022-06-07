@extends('public.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>A kiválasztott recept leírása</h3>

            <table class="table table-sm">
                <tr>
                    <th>Étel neve</th>
                    <th>Leírás</th>
                    <th>Hozzávalók</th>
                </tr>
                <tr>
                    <td>{{ $recipe->name }}</td>
                    <td class="text-break">{{ $recipe->description }}</td>
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
    <section class="row">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary" href="{{ route('public.index') }}">
                Vissza
            </a>
        </div>
    </section>

@endsection
