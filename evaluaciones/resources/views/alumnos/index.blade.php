<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Calificación final</th>
            <th>Acciones</th>

        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>
                    <a href="{{route("alumnos.show", $alumno)}}">{{$alumno->nombre}}</a>
                </td>
                <td>
                    {{$alumno->notas->flatMap->nota->count()}}
                </td>
                <td>
                    <form action="{{route("alumnos.edit", $alumno)}}" method="GET">
                        <button type="submit">Editar</button>
                        @csrf
                    </form>
                    <form action="{{route("alumnos.destroy", $alumno)}}"  method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('alumnos.create')}}">Crear</a>
</body>
</html>
