@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">

            <table class="table table-sm">
                <tr>
                    <td class="text-center align-middle">A 'simplekitchen' alkalmazás felhasználói</td>
                    <td class="text-center align-middle">
                        <a class="btn btn-success m-2" href="{{ route('admin.users') }}">Felhasználók</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center align-middle">A 'simplekitchen' alkalmazás ételkategóriái</td>
                    <td class="text-center align-middle">
                        <a class="btn btn-success m-2" href="{{ route('admin.categories') }}">Ételkategóriák</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center align-middle">A 'simplekitchen' alkalmazás recept-hozzávalói</td>
                    <td class="text-center align-middle">
                        <a class="btn btn-success m-2" href="{{ route('admin.ingredients') }}">Hozzávalók</a>
                    </td>
                </tr>
            </table>

        </div>
    </section>
@endsection
