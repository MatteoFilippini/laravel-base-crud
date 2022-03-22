<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Crea un nuovo comic</h3>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title"><br>
        <label for="description">Descrizione</label>
        <input type="text" id="description" name="description"><br>
        <label for="thumb">URL image</label>
        <input type="text" id="thumb" name="thumb"><br>
        <label for="price">Prezzo</label>
        <input type="number" id="price" name="price" step="0.01"><br>
        <label for="series">Serie</label>
        <input type="text" id="series" name="series"><br>
        <label for="sale_date">Data</label>
        <input type="date" id="sale_date" name="sale_date"><br>
        <label for="type">Tipo</label>
        <input type="text" id="type" name="type"><br>
        <button type="submit">Crea</button>
    </form>
</body>

</html>