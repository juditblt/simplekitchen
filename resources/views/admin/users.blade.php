@extends('admin.layout')

@section('content')

    <hr>

    <a href=""></a>
    <hr>

    <h3>A 'simplekitchen' alkalmazás felhasználói</h3>

    <table>
        <tr>
            <th>Név</th>
            <th>Email</th>
            <th>Role</th>
            <th></th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>

@endsection
