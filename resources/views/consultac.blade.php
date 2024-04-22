<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultac</title>
</head>
<body>
  
<form class="text-center" action="" method="post">
  <input type="search" name="cedulaCliente" id="">
  <button type="submit">Buscar</button>
    @csrf                  
</form>   

<table class="table mt-3">
    <thead class="table-dark">
      <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Nacionalidad</th>
      </tr>
    </thead>

    <tbody> 
      @foreach($cliente as $clie)
          <tr>
            <td>{{$clie->cedula}}</td>
            <td>{{$clie->nombres}}</td>
            <td>{{$clie->apellidos}}</td>
            <td>{{$clie->direccion}}</td>
            <td>{{$clie->celular}}</td>
            <td>{{$clie->correo}}</td>
            <td>{{$clie->nacionalidad}}</td>
          </tr>
        @endforeach

        @foreach($clientes as $cli)
          <tr>
            <td>{{$cli->cedula}}</td>
            <td>{{$cli->nombres}}</td>
            <td>{{$cli->apellidos}}</td>
            <td>{{$cli->direccion}}</td>
            <td>{{$cli->celular}}</td>
            <td>{{$cli->correo}}</td>
            <td>{{$cli->nacionalidad}}</td>
          </tr>
        @endforeach
        
    </tbody>    
  </table>                  
  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>