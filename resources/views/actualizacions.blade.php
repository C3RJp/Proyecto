<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ActualizarServicio</title>
</head>
<body>

    <div class="text-center">
        <form action="#" method="get">
            <div class="w-100 mb-3">
                <input type="search" name="numeroContrato">
                <button type="submit">Buscar</button>                
                @csrf
            </div>                                    
        </form> 

        <form action="{{route('actS')}}" method="post">
            @csrf          
            <?php $contrato=request('numeroContrato');?>
            <input type="number" name="nContrato" value="<?php echo $contrato?>" hidden>

            <input type="number" name="Nc" value="<?php echo $contrato?>" disabled>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault02" class="form-label">Activar</label>
                    <select class="form-select" aria-label="Default select example" name="activo">
                        <option selected value="1">Activo</option>
                        <option value="0">Desactivar</option>                        
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault03" class="form-label">Mora</label>
                    <select class="form-select" aria-label="Default select example" name="mora">
                        <option selected value="0">Sin Mora</option>
                        <option value="1">Con Mora</option>                        
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault04" class="form-label">Dias De Mora</label>
                    <input name="diasMora" type="number" min="0" class="form-control" id="validationDefault04">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault05" class="form-label">Numero De Cuotas</label>
                    <input name="numeroCuotas" type="number" min="0" class="form-control" id="validationDefault05">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault06" class="form-label">Adicionales</label>
                    <input name="adicionales" type="Text" class="form-control" id="validationDefault06">
                </div>
            </div>

            
            <div class="row">
                <div class="col-12">
                    <label for="validationDefault07" class="form-label">Valor Adicional</label>
                    <input name="valorAdicional" type="number" min="0" class="form-control" id="validationDefault07">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault08" class="form-label">Valor De Contrato</label>
                    <input name="valorContrato" type="number" min="0" class="form-control" id="validationDefault08">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault09" class="form-label">Valor Cuota Inicial</label>
                    <input name="valorCuotaInicial" type="number" min="0" class="form-control" id="validationDefault09">
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <input class="btn btn-dark" type="submit" value="Actualizar">
                </div>
            </div>

        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>