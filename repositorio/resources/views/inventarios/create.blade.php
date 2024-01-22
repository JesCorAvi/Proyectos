<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("personajes.store")}}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="descripción">Descripción:</label><br>
        <textarea name="descripción" id="descripción" ></textarea><br>
        <label for="jugador">Jugador:</label>
        <select name="jugador" id="jugador">
            @foreach ($jugadores as $jugador)
                <option value="{{$jugador->id}}"> {{$jugador->nombre}}</option>
            @endforeach
        </select><br>
        <label for="inventario">Inventario:</label>
        <select name="inventario" id="inventario">
            @foreach ($inventarios as $inventario)
                <option value="{{$inventario->id}}"> {{$inventario->id}}</option>
            @endforeach
        </select><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
