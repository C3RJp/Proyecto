<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultae</title>
</head>
<body>

    <form class="text-center" action="" method="post">
        <input type="search" name="cedulaEmpleado" id="">
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
            </tr>
        </thead>
        <tbody>

            @foreach($empleadoEspecifico as $empleadoe)
                <tr>
                    <td>{{$empleadoe->cedula}}</td>
                    <td>{{$empleadoe->nombres}}</td>
                    <td>{{$empleadoe->apellidos}}</td>
                    <td>{{$empleadoe->direccion}}</td>
                    <td>{{$empleadoe->celular}}</td>
                    <td>{{$empleadoe->correo}}</td>
                </tr>
            @endforeach

            @foreach($empleados as $emp)
            <tr>
                <td>{{$emp->cedula}}</td>
                <td>{{$emp->nombres}}</td>
                <td>{{$emp->apellidos}}</td>
                <td>{{$emp->direccion}}</td>
                <td>{{$emp->celular}}</td>
                <td>{{$emp->correo}}</td>
            </tr>
            @endforeach  
                  
        </tbody>
    </table>
    
    
    <!-- <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                {{$empleados->links()}}
            </li>
        </ul>
    </nav> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>