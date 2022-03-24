@extends ("layouts.home")

@section('content')
<div class="main-show">
    <div class="picture">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card-s">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="general">
        <div class="container">
            <div class="row p-5">
                <div class="col-9">
                    <div class="desc">
                        <h2 class="mb-3">{{ $comic->title }}</h2>
                        <div class="banner shadow-sm">
                            <div class="row">
                                <div class="col-10 d-flex justify-content-between border-end p-3">
                                    <p class="fs-6 m-0 ms-2">U.S. Price: $ <span class="text-light">{{ $comic->price }}</span> </p>
                                    <p class="fs-6 text-uppercase m-0">available</p>
                                </div>
                                <div class="col-2 p-3 d-flex justify-content-center">
                                    <!-- dropdown -->
                                    <span class="text-light me-1">Check Aviability</span>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p class="fs-6 mt-3 lh-lg">
                                {{$comic->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-3">
                    <img src="{{ $comic->thumb }}" alt="thumb" class="img-fluid" style="width:300px;height:300px">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="info d-flex justify-content-center align-items-center mb-5 position-relative">
            <a href="{{ route('comics.edit',$comic->id) }}" class="btn btn-primary me-3">Modifica</a>
            <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
            <a href="{{ route('comics.index') }}" class="position-absolute bottom-0 start-0 text-decoration-none fs-4 move">
                Tutti i fumetti
            </a>
        </div>
    </div>

</div>


@endsection