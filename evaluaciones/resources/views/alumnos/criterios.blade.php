<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <table border="1">
        <h3>Alumno</h1>
        {{$alumnos->nombre}}

        <tr>
            <th>Criterio</th>
            <th>Nota</th>
        </tr>
        @foreach ($notas as $nota)
        <tr>
            <td>{{$nota->ce->ce}}</td>
            <td>{{$nota->nota}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
