<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="d-flex flex-wrap">
    @foreach ($characters as $character)
    <div class="card w-25 m-2">
        <h2>name: {{$character->name}}</h2>
        <p>description: {{$character->description}}</p>
        <p>attack: {{$character->attack}} / 10</p>
        <p>defence: {{$character->defence}} / 10</p>
        <p>speed: {{$character->speed}} / 10</p>
        <p>life:{{$character->life}} / 100</p>
    </div>
    @endforeach
</body>

</html>