<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->price }}</p>
    <a href="{{ route('comics.index') }}">Tutti i comics</a>
</body>

</html>