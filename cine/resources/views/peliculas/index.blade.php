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
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach($peliculas as $pelicula)
            <tr>
              <td><a href="{{route("peliculas.show", $pelicula)}}">{{$pelicula->titulo}}</a></td>
              <td>
                <form action="{{route("peliculas.edit", $pelicula)}}" method="GET">
                    @csrf
                    <button type="submit"> editar </button>
                </form>
            </td>
              <td>
                <form action="{{route("peliculas.destroy", $pelicula)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit"> Borrar </button>
                </form>
              </td>
            </tr>
            @endforeach
    </tbody>
  </table>
  <br>
  <a href="{{route("peliculas.create")}}"> CREAR</a>
</body>
</html>
