@extends('public.layout')

@section('content')
    <hr>
    <section id="app" class="row justify-content-center">
        <div class="col-sm-12 col-md-6">

            <recipe :recipe="{{ $recipe }}"></recipe>

            <p class="fs-5 fst-italic text-decoration-underline">Hozzávalók:</p>
            <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
            @endforeach
            </ul>
        </div>

        <hr>
        <div class="col-sm-12 col-md-6 m-2">
            <other-recipe></other-recipe>
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
