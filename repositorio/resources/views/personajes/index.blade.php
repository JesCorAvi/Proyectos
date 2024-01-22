<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Monedero</th>
            <th>Inventario</th>
            <th>Acciones</th>

        </tr>
        @foreach ($personajes as $personaje)
            <tr>
                <td><a href="{{route("personajes.show", $personaje)}}">{{$personaje->nombre}}</a></td>
                <td>{{$personaje->monedero}}</td>
                <td>
                    <form action="{{route("personajes.edit", $personaje)}}" method="GET">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                    <form action="{{route("personajes.destroy", $personaje)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route("personajes.create")}}"> CREAR</a>
</body>
</html>
