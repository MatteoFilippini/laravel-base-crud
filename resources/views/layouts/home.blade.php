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
        <div class="main-home p-5">
            <div class="container">
                <h2 class="text-center">Comics</h2>
                <div class="comics d-flex mb-4">
                    @for($i = 0; $i < 6;$i++) <a href="{{ route('comics.show',$comics[$i]) }}" class="me-3"><img src="{{ $comics[$i]->thumb }}" alt="" style="width:220px;height:220px"></a>
                        @endfor
                </div>
                <a class="text-decoration-none fs-4 move" href="{{ route('comics.index') }}">Tutti i fumetti</a>
            </div>
        </div>
        @else
        @yield('content')
        @endif
    </main>
    @include('layouts/includes.footer')

</body>

</html>