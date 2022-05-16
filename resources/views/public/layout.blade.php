<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simplekitchen</title>
</head>
<body>
    <h1>Egyszerű receptek</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Kilépés">
    </form>

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

    <hr>

    @section('content')
        public oldal tartalma...
    @show
</body>
</html>