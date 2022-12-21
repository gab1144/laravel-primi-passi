<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Ciao Laravel About Us</title>
</head>
<body>
    <div class="container">
        <h1>About US</h1>
        <h2>{{ $saluto }} {{ $utente }}!</h2>

        @if ($stampa_paragrafo)
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur architecto quidem eaque pariatur inventore cupiditate quam et, magnam accusantium nulla, obcaecati commodi quibusdam id. Quisquam eaque reprehenderit quos recusandae consequuntur!
            </p>
        @else
            <p>Nessun paragrafo da stampare</p>
        @endif

        <h3>Lista numeri da 1 a 10: </h3>
        <ul>
            @foreach ($numeri as $numero )
                <li>{{ $numero }}</li>
            @endforeach
        </ul>
        <a href="/" class="button">Torna alla Home</a>
    </div>
</body>
</html>
