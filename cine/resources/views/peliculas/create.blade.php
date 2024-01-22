<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("peliculas.store")}}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo"><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
