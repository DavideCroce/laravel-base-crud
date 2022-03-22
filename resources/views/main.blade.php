<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <ul style="color: white; list-style-type: none;" class="d-flex flex-row">
                <li class="px-3">
                    <a style="text-decoration: none; color:white;" href="{{ route('main') }}">Home</a>
                </li>
                <li class="px-3"><a style="text-decoration: none; color:white;"
                        href="{{ route('comics.index') }}">Comics</a></li>
                <li class="px-3">Other</li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

</body>

</html>
