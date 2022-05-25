@extends('admin.layout')

@section('content')
    <hr>
    <a href="{{ route('admin') }}">Vissza</a>
    <hr>
    <h3>A 'simplekitchen' alkalmazás felhasználói</h3>

    <table>
        <tr>
            <th>Név</th>
            <th>Email</th>
            <th>Role</th>
            <th>Adminná előléptet</th>
            <th>Felhasználó törlése</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('admin.users.promote') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="submit" value="Előléptet">
                </form>
            </td>
            <td>
                <form action="{{ route('admin.users.delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="submit" value="Töröl">
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
