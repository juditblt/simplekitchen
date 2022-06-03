<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('css/index.css') }}">
    <title>Simplekitchen</title>
</head>
<body>
    <main class="container">
        <h1 class="row justify-content-center m-3">Egyszerű receptek</h1>

        <section class="row">
            <div class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item m-2">
                        <a class="btn btn-primary" href="{{ route('login') }}">
                            Belépés
                        </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="btn btn-primary" href="{{ route('register') }}">
                            Regisztráció
                        </a>
                    </li>
                    <li class="nav-item m-2">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input class="btn btn-primary" type="submit" value="Kilépés">
                        </form>
                    </li>
                </ul>
            </div>
        </section>


        @section('content')
            public oldal tartalma...
        @show

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
    </main>
</body>
</html>
