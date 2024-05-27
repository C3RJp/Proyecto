<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>registrofacturas</title>
</head>
<body>
    <div class="text-center w-100 mt-4" >
        <form class="text-center" action="{{route('regF')}}" method="POST"> 
             @csrf
            <div class="container-fluid m-auto bg-transparent">

                <div class="row d-flex col-8 m-auto " >
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light ">Número de cédula</span>
                        <input type="number" name="cedula" min="0" max="9999999999" class="form-control" placeholder="Número de cédula" required>
                    </div>
                </div>

                <div class="row d-flex col-8 m-auto">
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light">Número de contrato</span>
                        <input type="number" name="numeroContrato" min="0" max="9999999999" class="form-control" placeholder="Número de contrato" required>
                    </div>
                </div>

                
                <div class="row d-flex col-8 m-auto">
                <div class="input-group m-1">  
                    <select class="form-select" name="banco" required>
                        <option value="bancolombia">Bancolombia</option>
                        <option value="davivienda">Davivienda</option>
                        <option value="westernunion">WesternUnion</option>
                    </select>
                </div>
                </div>
                    
                

                <div class="row d-flex col-8 m-auto " >
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light">Número de factura</span>
                        <input type="number" name="numfactura" min="0" max="9999999999" class="form-control" placeholder="Número de factura" required>
                    </div>
                </div>

                <div class="row d-flex col-8 m-auto " >
                    <div class="input-group m-1">
                        <span class="input-group-text bg-dark text-light">Valor</span>
                        <input type="number" name="valor" min="0" max="9999999999" class="form-control" placeholder="Valor" required>
                    </div>
                </div>

                <div class="row d-flex col-4 m-auto pt-2" >
                    <button type="submit" class="btn btn-outline-dark">Registrar</butto>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>