<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} @yield('page_title')</title>
    @section('vite')
    @vite(['resources/css/app.css', 'resources/css/reservation.css'])
    @show
</head>
<body>

    <header>
        @section('header')
            <nav>
                <ul>
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('menu') }}">Menu</a></li>
                    <li><a href="{{ route('reservation') }}">Réservation</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a><br></li>
                </ul>
            </nav>
        @show
    </header>

    <main>
        @section('content')
        @show
    </main>
    
    <footer class="footer">
        @section('footer')
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('contact') }}">Contact</a><br></li>
                <li><a href="{{ route('mentions_legales') }}">Mentions Légales</a><br></li>
                <li>© Copyright Foo Bar 2022</li>
            </ul>
        @show
    </footer>
    
</body>
</html>