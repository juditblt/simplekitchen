@extends('public.layout')

@section('content')
    <hr>

    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-4">
            <h3>Az oldalon elérhető receptek</h3>
            <table class="table table-sm table-responsive">
                <tr>
                    <th>Kategóriák</th>
                    <th>Receptek</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <ul class="list-unstyled">
                        @foreach($category->recipes as $recipe)
                            {{-- Feltétel: csak a publikus receptek legyenek itt: --}}
                            @if($recipe->public == 1)
                            <li>
                                <a href="{{ route('public.show', ['id' => $recipe->id]) }}">
                                    {{ $recipe->name }}
                                </a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-12 col-md-4">
            <h2 class="text-center text-uppercase bg-warning fst-italic rounded m-3">Üdvözöljük!</h2>
            <div class="text-center">
                <p>Ezen az oldalon megtalálja publikus receptjeinket. <br>
                    Az étel nevére kattintva láthatóak a részletek.
                </p>
                <p class="fs-4 text-danger fst-italic">...és egy meglepetés!</p>
                <p>Ha regisztrál, rendszerezheti saját receptjeit.</p>
                <p>Jó böngészést kívánunk!</p>

            <img class="picture rounded" src="IMG/etel.jpg" alt="etelfoto">
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3>A receptek összetevők szerint</h3>
            <table class="table table-sm table-responsive">
                <tr>
                    <th>Összetevők</th>
                    <th>Receptek</th>
                </tr>
                @foreach($ingredients as $ingredient)
                <tr>
                    <td>{{ $ingredient->name }}</td>
                    <td>
                        <ul class="list-unstyled">
                        @foreach($ingredient->recipes as $recipe)
                            {{-- Feltétel: csak a publikus receptek legyenek itt: --}}
                            @if($recipe->public == 1)
                            <li>
                                <a href="{{ route('public.show', ['id' => $recipe->id]) }}">
                                    {{ $recipe->name }}
                                </a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection

