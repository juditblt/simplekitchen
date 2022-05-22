@extends('admin.layout')

@section('content')

    <h3>A 'simplekitchen' alkalmazás ételkategóriái</h3>

    <table>
        <tr>
            <th></th>
            <th>Kategóriák</th>
            <th></th>
            <th>Receptek</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td></td>
                <td>{{ $category->name }}</td>
                <td></td>
                <td>
                    <ul>
                        @foreach($category->recipes as $recipe)
                            <li>{{ $recipe->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>



@endsection
