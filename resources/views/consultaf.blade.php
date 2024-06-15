<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultaf</title>
</head>
<body>
    <div class="text-center w-100 mt-4" >
        <form class="text-center" action="" method="POST"> 
             @csrf
            <div class="container-fluid m-auto bg-transparent">

                <div class="row d-flex col-8 m-auto " >
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light ">Cédula de abogado</span>
                        <input type="number" name="cedula" min="0" max="9999999999" class="form-control" placeholder="Número de cédula">
                    </div>
                </div>

                <div class="row d-flex col-8 m-auto " >
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light">Número de servicio</span>
                        <input type="number" name="numeroContrato" min="0" max="9999999999" class="form-control" placeholder="Número de contrato">
                    </div>
                </div>

                <div class="row d-flex col-4 m-auto pt-2" >
                    <button type="submit" class="btn btn-outline-dark">Buscar</butto>
                </div>
            </div>
        </form>
        
        <div class="container-fluid mt-2 bg-transparent">
            <div class="row col-12 m-auto ">
                <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="border border-black">Número De Contrato</th>
                        <th class="border border-black">Cédula  Cliente</th>
                        <th class="border border-black">Banco</th>
                        <th class="border border-black">Número De factura</th>
                        <th class="border border-black">Valor</th>
                    </tr>
                </thead>
                
                <tbody>                      
                    <ul>
                    @foreach ($factura as $fac )
                        <tr>
                            <td class="border border-black">{{$fac->numcontrato}}</td>    
                            <td class="border border-black">{{$fac->cedula}}</td>                             
                            <td class="border border-black">{{$fac->banco}}</td>                        
                            <td class="border border-black">{{$fac->numfactura}}</td>
                            <td class="border border-black">{{$fac->valor}}</td>                            
                        </tr>
                    @endforeach
                    </ul>
                </tbody>

                <tfoot>
                </tfoot>

                </table>
            </div>
        </div>

        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>