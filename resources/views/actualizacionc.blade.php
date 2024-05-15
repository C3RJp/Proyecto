<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ActualizarEmpleado</title>
</head>
<body>
    <div class="text-center">

        <form action="#" method="get">
            <div class="w-100 mb-3">
                <input type="search" name="cedulaCliente">
                <button type="submit">Buscar</button>                
            </div>                        
        </form> 

        <form class="text-center" action="{{route('actC')}}" method="post">
            <div class="w-75 m-auto">
                @csrf
                <?php $ced=request('cedulaCliente');?>
                <input type="number" name="cedula" value="<?php echo $ced; ?>" hidden>
                
                <div class="row">
                    <div class="col-12">
                        <label for="validationDefault01" class="form-label">cedula</label>
                        <input name="cedulaCA" type="text"class="form-control" id="validationDefault01" placeholder="<?php echo $ced; ?>" disabled>
                    </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault02" class="form-label">Nombres</label>
                    <input name="nombreCA" type="text"class="form-control" id="validationDefault02" placeholder="" required>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault03" class="form-label">Apellidos</label>
                    <input name="apellidoCA" type="text"class="form-control" id="validationDefault03" placeholder="" required>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault05" class="form-label">Celular</label>
                    <input name="celularCA" type="number" min="0" class="form-control" id="validationDefault05" placeholder="" required>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault04" class="form-label">Dirección</label>
                    <input name="direccionCA" type="text" class="form-control" id="validationDefault04" placeholder="" required>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault06" class="form-label">Correo</label>
                    <input name="correoCA" type="text" class="form-control" id="validationDefault06" placeholder="" required>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <label for="validationDefault07" class="form-label">Nacionalidad</label>
                    <input name="nacionalidadCA" type="text" class="form-control" id="validationDefault07" placeholder="" required>
                </div>
                </div>

                <div class="row pt-3">
                <div class="col-12">
                    <label for="validationDefault08" class="form-label ">Contraseña</label>
                    <input name="claveCA" type="text"class="form-control" id="validationDefault08" placeholder="" required>
                </div>
                </div>
            </div>
           
            
            <div class="col-12 mt-4">
                <button class="btn btn-dark" type="submit">Actualizar</button>
            </div>
            
        </form> 
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>