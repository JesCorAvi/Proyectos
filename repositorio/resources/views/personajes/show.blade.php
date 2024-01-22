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

        </tr>
        <tr>
            <td>{{$personaje->nombre}}</td>
            <td>{{$personaje->monedero}}</td>
        </tr>
    </table>
    <h3>Descripción</h3><br>
    <p>{{$personaje->descripción}}</p>
</body>
</html>
