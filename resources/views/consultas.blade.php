<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultae</title>
</head>
<body>
    <div class="text-center w-100" >
        <form class="text-center" action="" method="post">
            <input type="search" name="numeroContrato" id="">
            <button type="submit">Buscar</button>
             @csrf                  
        </form>
        <br>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Numero De Contrato</th>    
                    <th>Activo</th>
                    <th>Cedula Abogado</th>
                    <th>Cedula Cliente</th>                    
                    <th>Numero De Cuotas</th>
                    <th>Adicionales</th>
                    <th>Valor Adicional</th>
                    <th>Valor De Contrato</th>
                    <th>Valor De Cuota Inicial</th>
                </tr>
            </thead>
            
            <tbody>
                
            @foreach($servicio as $se)
                    <tr>
                        <td>{{$se->id}}</td>
                        <td>{{$se->activo}}</td>    
                        <td>{{$se->cedulaEmpleado}}</td>
                        <td>{{$se->cedulaCliente}}</td>                        
                        <td>{{$se->numeroCuotas}}</td>
                        <td>{{$se->adicionales}}</td>
                        <td>{{$se->valorAdicional}}</td>
                        <td>{{$se->valorContrato}}</td>
                        <td>{{$se->valorCuotaInicial}}</td>                        
                    </tr>
                @endforeach

                @foreach($servicios as $serv)
                <tr>
                        <td>{{$serv->id}}</td> 
                        <td>{{$serv->activo}}</td>           
                        <td>{{$serv->cedulaEmpleado}}</td>
                        <td>{{$serv->cedulaCliente}}</td>                        
                        <td>{{$serv->numeroCuotas}}</td>
                        <td>{{$serv->adicionales}}</td>
                        <td>{{$serv->valorAdicional}}</td>
                        <td>{{$serv->valorContrato}}</td>
                        <td>{{$serv->valorCuotaInicial}}</td>                        
                    </tr>
                @endforeach

            </tbody>
        </table>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>