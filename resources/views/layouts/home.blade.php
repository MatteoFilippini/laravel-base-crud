<?php

use App\Models\Comic;

$comics = Comic::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @include('layouts/includes.header')
    <main>

        @if(Request::is('/'))
        <ul>
            @for($i = 0; $i < 5;$i++) <li><a href="{{ route('comics.show',$comics[$i]) }}">{{ $comics[$i]->title }}</a></li>
                @endfor
        </ul>
        <a class="text-center" href="{{ route('comics.index') }}">TUTTI I COMICS</a>
        @else
        @yield('content')
        @endif
    </main>
    @include('layouts/includes.footer')

</body>

</html>