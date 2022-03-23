@extends ("layouts.home")


@section('content')
<h1>{{ $comic->title }}</h1>
<p>{{ $comic->price }}</p>
<a href="{{ route('comics.edit',$comic->id) }}">modifica</a>
<a href="{{ route('comics.index') }}">Tutti i comics</a>
@endsection