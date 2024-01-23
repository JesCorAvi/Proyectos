<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("alumnos.update", $alumnos)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="nombre" >Nombre</label>
        <input type="text" name="nombre" value="{{$alumnos->nombre}}"><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
