@extends ("layouts.home")


@section('content')
<div class="main-index p-5">

    <div class="container">
        <h2 class="text-center">Tutti i fumetti</h2>
        <div class="comics d-flex mb-4 flex-wrap">
            @foreach($comics as $comic)
            <a href="{{ route('comics.show',$comic->id) }}" class="m-3"><img src="{{ $comic->thumb }}" alt="" style="width:220px;height:220px"></a>
            @endforeach
        </div>
        <div class="routes d-flex justify-content-around">
            <a class="fs-4" href="{{route('home')}}">HOME</a>
            <a class="btn btn-success" href="{{ route('comics.create')}}">Aggiungi</a>
        </div>
    </div>
</div>
@endsection