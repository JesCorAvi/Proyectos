<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("personajes.update", $personajes)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{$personajes->nombre}}"><br>
        <label for="descripción">Descripción:</label><br>
        <textarea name="descripción" id="descripción"> {{$personajes->descripción}}</textarea><br>
        <label for="monedero">Monedero:</label>
        <input type="text" name="monedero" id="monedero" value="{{$personajes->monedero}}"><br>
        <label for="jugador">Jugador:</label>
        <select name="jugador" id="jugador">
            @foreach ($jugadores as $jugador)
                <option value="{{$jugador->id}}" {{ $jugador->id == $personajes->jugador_id ? 'selected' : ''}}> {{$jugador->nombre}} </option>
            @endforeach
        </select><br>
        <label for="inventario">Inventario:</label>
        <select name="inventario" id="inventario">
            @foreach ($inventarios as $inventario)
                <option value="{{$inventario->id}}" {{ $inventario->id == $personajes->inventario_id ? 'selected' : ''}}> {{$inventario->id}}  </option>
            @endforeach
        </select><br>
        <button type="submit">Editar</button>
    </form>
</body>
</html>
