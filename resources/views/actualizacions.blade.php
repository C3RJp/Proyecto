<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ActualizarServicio</title>
</head>
<body>
<div class="container w-100 border">
    <div class="w-75 m-auto">
        <form class="pt-3" action="" method="get">
            <div class="input-group d-flex justify-content-center">
                <span class="input-group-text bg-dark text-light" id="">Numero de servicio</span>
                <input name="numero" type="number" min="1" max="9999999999" class="" placeholder="">
                <input class="btn btn-outline-secondary bg-dark text-light" type="submit" value="Buscar">
            </div>
        </form>

        @foreach ($servicios as $serv)
            @php        
                $diasm=$serv->diasMora;
                $numeroCuotas=$serv->numeroCuotas;
                $valorAdicional=$serv->valorAdicional;
                $valorContrato=$serv->valorContrato;
                $valorCuotaInicial=$serv->valorCuotaInicial;
            @endphp
        @endforeach
        
<form action="" method="post">
    @csrf              

    <div class="row">
        <div class="col-12">
            <label for="validationDefault02" class="form-label">Activar</label>
            <select class="form-select" aria-label="Default select example" name="activo">
                <option selected value= 1>Activo</option>
                <option value=0>Desactivar</option>                        
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault03" class="form-label">Mora</label>
            <select class="form-select" aria-label="Default select example" name="mora">
                <option selected value=0>Sin Mora</option>
                <option value=1>Con Mora</option>                        
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault04" class="form-label">Dias De Mora</label>
            <input name="diasm" type="number" min="0" class="form-control" id="validationDefault04" placeholder="@php echo $diasm; @endphp " required>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault05" class="form-label">Numero De Cuotas</label>
            <input name="numeroCuotas" type="number" min="0" class="form-control" id="validationDefault05" placeholder="@php echo $numeroCuotas; @endphp " required>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault06" class="form-label">Adicionales</label>
            <select class="form-select" aria-label="Default select example" name="adicionales" >
                <option value=0 selected>Sin Adicionales</option>
                <option value=1>Con Adicionales</option>                        
            </select>
        </div>                
    </div>

    
    <div class="row">
        <div class="col-12">
            <label for="validationDefault07" class="form-label">Valor Adicional</label>
            <input name="valorAdicional" type="number" min="0" class="form-control" id="validationDefault07" placeholder="@php echo $valorAdicional; @endphp " required>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault08" class="form-label">Valor De Contrato</label>
            <input name="valorContrato" type="number" min="0" class="form-control" id="validationDefault08" placeholder="@php echo $valorContrato; @endphp " required>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="validationDefault09" class="form-label">Valor Cuota Inicial</label>
            <input name="valorCuotaInicial" type="number" min="0" class="form-control" id="validationDefault09" placeholder="@php echo $valorCuotaInicial; @endphp " required>
        </div>
    </div>
    
    <div class="container d-flex w-100 pt-3 pb-3">
        <div class="m-auto">
            <input class="btn bg-dark text-light" type="submit" value="Actualizar">
        </div>
    </div>
</form>


    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>