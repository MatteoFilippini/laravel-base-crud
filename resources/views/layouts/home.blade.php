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
    <header>
        <div class="t-header">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12 d-flex justify-content-end align-items-center content">
                        <p class="me-2 m-0">dc power visa</p>
                        <p class="m-0 p-1">dropdown</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand " href="{{ route('home') }}"><img class="img-fluid me-5" src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">characters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('comics.index') }}">Comics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">tv</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">collectibles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">fans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">shop</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>

                </nav>
            </div>

        </div>
        <div class="jumbo">
        </div>
    </header>
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
    <footer>
        <div class="t-footer"></div>
        <div class="b-footer ">
            <div class="container d-flex justify-content-between align-items-center">
                <a href="#" class="butt">sign-up now!</a>
                <div class="footer-icons d-flex justify-content-between align-items-center">
                    <span>follow us</span>
                    <div class="icons">
                        <a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/footer-twitter.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/footer-youtube.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/footer-pinterest.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/footer-periscope.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>