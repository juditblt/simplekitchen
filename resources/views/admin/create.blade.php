@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-6 m-2">
            <h3>Itt hozhat létre új kategóriát:</h3>

            <form class="row" action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                <div class="col-md-12 gy-2">
                    <label for="category" class="form-label">Kategória:</label>
                    <input type="text" class="form-control" name="name" id="category" size="50">
                </div>
                <div class="row g-3 mx-1">
                    <div class="col-md-4">
                        <input type="submit" class="form-control btn btn-primary" value="Elküld">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary m-2" href="{{ route('admin.categories') }}">
                Vissza
            </a>
        </div>
    </section>

@endsection
