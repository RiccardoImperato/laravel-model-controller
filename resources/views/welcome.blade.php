<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="container py-5">
        <ul class="d-flex flex-wrap gap-4 justify-content-center p-0">
            @foreach ($movies as $movie)
                <li class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                        <div class="card-text">{{ $movie['nationality'] }}</div>
                        <div class="card-text">{{ $movie['date'] }}</div>
                        <div class="card-text">{{ $movie['vote'] }}</div>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
</body>

</html>
