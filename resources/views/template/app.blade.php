<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>

<body>
    <h1>Aplikasiku</h1>
    <a href="/halaman1">Halaman 1</a>
    <a href="/halaman2">Halaman 2</a>
    <a href="/halaman3">Halaman 3</a>
    <div>
        @yield('badan')
    </div>

</body>

</html>