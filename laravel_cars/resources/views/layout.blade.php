<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autók</title>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script> -->
    <link rel="stylesheet" href='\css\style.css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}" >

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>

<body>
    <header>
            <nav>
                <ul>
                    <li><a href="{{ route('makers.index') }}">Gyártók</a></li>
                    <li><a href="{{ route('bodies.index') }}">Karosszériák</a></li>
                </ul>
            </nav>
         </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Demény Máté</p>
    </footer>

</body>

</html>
