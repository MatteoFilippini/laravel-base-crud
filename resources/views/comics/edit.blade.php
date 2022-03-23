@extends ("layouts.home")

@section('content')
<h1>MODIFICA</h1>
<form action="{{ route('comics.update',$comic->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="title">Titolo</label>
    <input type="text" id="title" name="title" value="{{ $comic->title }}"><br>
    <label for="description">Descrizione</label>
    <input type="text" id="description" name="description" value="{{ $comic->description }}"><br>
    <label for="thumb">URL image</label>
    <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}"><br>
    <label for="price">Prezzo</label>
    <input type="number" id="price" name="price" step="0.01" value="{{ $comic->price }}"><br>
    <label for="series">Serie</label>
    <input type="text" id="series" name="series" value="{{ $comic->series }}"><br>
    <label for="sale_date">Data</label>
    <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"><br>
    <label for="type">Tipo</label>
    <input type="text" id="type" name="type" value="{{ $comic->type }}"><br>
    <button type="submit">Modifica</button>
</form>
<a href="route('comics.index')">index</a>
@endsection