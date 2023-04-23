<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmUOlmM5" crossorigin="anonymous"> --}}
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        @yield('header')
    </header>

    <main class="">
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>

</html>
