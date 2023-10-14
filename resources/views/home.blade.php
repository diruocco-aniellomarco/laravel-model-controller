<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row mt-3 g-3">
            @forelse ($movies as $movie)

                <div class="col-3">
                    <div class="card h-100 text-center">
                        <div class="card-header">
                           <h4>{{ $movie->title }}</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Titolo originale: {{ $movie->original_title }}</li>
                            <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Anno: {{ $movie->date }}</li>
                            <li class="list-group-item"> <b>{{ $movie->vote }}</b> </li>
                        </ul>
                    </div>
                </div> 
            @empty
                <h1>NESSUN FILM</h1>
            @endforelse
        </div>
    </div>
    
</body>
</html>