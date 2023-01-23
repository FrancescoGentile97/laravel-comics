<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include("partials.navbar")
        @yield("navbar")
    </header>
        @include("partials.comics")
        @yield("comicsStamp")
    <h1>Vediamo se funziona</h1>
    @include("partials.footer")
    @yield("footer")

    
</body>
</html>