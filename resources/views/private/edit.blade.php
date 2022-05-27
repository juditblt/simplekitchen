@extends('private.layout')

@section('content')

    <hr>

    <h2>Üdvözöljük "{{ $recipe->user->name }}" ( {{ $recipe->user->email }} )!</h2>
    <hr>

    <h3>Itt szerkesztheti a kiválasztott receptet:</h3>
    <hr>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $recipe->id }}">
        Kategória:
        <label>{{ $recipe->category->name }}</label>
        <br>
        <br>

        <label for="name">Étel neve:</label>
        <input type="text" name="name" id="name" size="50" value="{{ $recipe->name }}">
        <br>
        <br>
        <label for="description">Leírás:</label>
        <textarea name="description" id="description" cols="50" rows="10">
            {{ $recipe->description }}
        </textarea>
        <br>
        <br>
        Láthatóság: Priv(0)/Publ(1)
        <br>
        Kötelező bejelölni!
        <br>
        <br>

        @for($i = 0; $i < 2; $i++)
            @if($recipe->public == $i)
                <input type="radio" name="public" id="public-{{$i}}" value="{{ $i }}">
            @else
                <input type="radio" name="public" id="private-{{$i}}" value="{{ $i }}">
            @endif
                <label for="public-{{$i}}">{{ $i }}</label>
        @endfor
        <br>
        <br>
        Hozzávalók:
        <br>
        <br>
        <table>
            <tr>
                <th>Hozzávaló</th>
                <th>Mennyiség</th>
                <th>Egység</th>
            </tr>
            @foreach($recipe->ingredients as $ingredient)
            <tr>
                <input type="hidden" name="ingr_id[]" value="{{ $ingredient->id }}">
                <td>{{ $ingredient->name }}</td>
                <td><input type="number" name="quantity[]" id="quantity" value="{{ $ingredient->pivot->quantity }}"></td>
                <td>{{ $ingredient->pivot->unit }}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <br>

        <input type="submit" value="Elküld">
    </form>

    <hr>

    <a href="{{ route('private.home') }}">
        Vissza
    </a>

@endsection
