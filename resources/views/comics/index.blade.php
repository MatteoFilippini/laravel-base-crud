@extends ("layouts.home")


@section('content')
<h2>Comics</h2>
<ul>
    @foreach($comics as $comic)
    <li><a href="{{ route('comics.show',$comic->id) }}">{{ $comic->title }}</a></li>
    @endforeach
</ul>
<a href="{{route('comics.create')}}">CREA</a>
<a href="{{route('home')}}">HOME</a>
@endsection