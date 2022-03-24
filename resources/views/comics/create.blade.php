@extends ("layouts.home")

@section('content')
<div class="main-create p-5">
    <div class="container">
        <h3 class="text-center">Crea un nuovo fumetto</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="mb-3 col-8">
                <label for="description" class="form-label">Descrizione</label>
                <textarea id="description" class="form-control" name="description" cols="30" rows="5" value="{{old('description')}}"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>
            <div class="mb-3 col-2">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
            </div>
            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            </div>
            <div class="mb-3 col-2">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
            </div>

            <div class="buttons text-end">
                <button type="reset" class="btn btn-danger fs-4 me-2">Reset</button>
                <button type="submit" class="btn btn-success fs-4">Crea</button>
            </div>
            <a href="{{ route('comics.index') }}" class="fs-4 move">Tutti i fumetti</a>
        </form>
    </div>
</div>


@endsection