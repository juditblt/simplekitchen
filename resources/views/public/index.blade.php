@extends('public.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-5 offset-md-1">
            <h3>Az oldalon elérhető receptek</h3>
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
        <div class="col-sm-12 col-md-5 offset-md-1">
            <h3>A receptek összetevők szerint</h3>
            <table class="table table-sm">
                <tr>
                    <th>Összetevők</th>
                    <th>Receptek</th>
                </tr>
                @foreach($ingredients as $ingredient)
                <tr>
                    <td>{{ $ingredient->name }}</td>
                    <td>
                        <ul>
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

