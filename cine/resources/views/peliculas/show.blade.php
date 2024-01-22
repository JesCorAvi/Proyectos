<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table-auto">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Total de entradas</th>
      </tr>
    </thead>
    <tbody>
            <tr>
              <td>{{$pelicula->titulo}}</td>
              <td>{{$totalEntrada}}</td>
            </tr>
    </tbody>
  </table>
</body>
</html>
