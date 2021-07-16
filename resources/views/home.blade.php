<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booltrips</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

        <!-- Styles -->
        <style>
           
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html, body {
                font-family: 'Roboto', sans-serif;
            }

            main {
                display: flex;
                flex-wrap: wrap;
            }

            .card {
                padding: 15px;
                margin: 30px;
                color: #fff;
                background-color: coral;
                text-align: center;
                border-radius: 15px;
            }

            h2 {
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <main>
            @foreach ($travels as $travel)
            <div class="card">
                <h2>{{ $travel->destination }}</h2>
                <h3>{{ $travel->country }}</h3>
                <h3>{{ $travel->region }}</h3>
                <h4>Nights: {{ $travel->nights }}</h4>
                <h4>Rating: {{ $travel->rating }}/5</h4>
                <h2>{{ $travel->price }} &euro;</h2>
            </div>
            @endforeach
        </main>
    </body>
</html>
