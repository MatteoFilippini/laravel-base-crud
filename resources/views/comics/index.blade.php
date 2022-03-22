<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Comics</h2>
    <ul>
        @foreach($comics as $comic)
        <li><a href="{{ route('comics.show',$comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
    <a href="{{route('comics.create')}}">CREA</a>
</body>

</html>