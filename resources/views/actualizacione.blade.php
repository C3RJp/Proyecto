<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ActualizarEmpleado</title>
</head>
<body>
<div class="d-flex w-100">
<div class="w-75 m-auto border">
    <form class="pt-3" action="" method="get">
        <div class="input-group d-flex justify-content-center">
            <span class="input-group-text bg-dark text-light" id="">Cedula</span>
            <input name="cedula" type="number" min="1" max="9999999999" class="" placeholder="">
            <input class="btn btn-outline-secondary bg-dark text-light" type="submit" value="Buscar">
        </div>
    </form>
    @foreach ($empleado as $emp)
        @php
        $cedula=$emp->cedula;
        $nombres=$emp->nombres;
        $apellidos=$emp->apellidos;
        $direccion=$emp->direccion;
        $celular=$emp->celular;
        $correo=$emp->correo;
        $clave=$emp->clave;        
        @endphp
    @endforeach

    <form action="" method="post">
        <div class="m-auto w-75">
            @csrf         
            <div class="row">
                <div class="col-12">
                    <label for="validationDefault02" class="form-label">Nombres</label>
                    <input name="nombreEA" type="text"class="form-control" id="validationDefault02" placeholder="@php echo $nombres; @endphp " required>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault03" class="form-label">Apellidos</label>
                    <input name="apellidoEA" type="text"class="form-control" id="validationDefault03" placeholder="@php echo $apellidos; @endphp " required>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault04" class="form-label">Celular</label>
                    <input name="celularEA" type="number" min="0" class="form-control" id="validationDefault04" placeholder="@php echo $celular; @endphp " required>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault05" class="form-label">Dirección</label>
                    <input name="direccionEA" type="text" class="form-control" id="validationDefault05" placeholder="@php echo $direccion; @endphp " required>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="validationDefault06" class="form-label">Correo</label>
                    <input name="correoEA" type="text" class="form-control" id="validationDefault06" placeholder="@php echo $correo; @endphp " required>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-12">
                    <label for="validationDefault07" class="form-label ">Contraseña</label>
                    <input name="claveEA" type="text"class="form-control" id="validationDefault07" placeholder="@php echo $clave; @endphp " required>
                </div>
            </div>

            <div class="row col-6 m-auto pt-3 pb-3">
                <button class="btn btn-dark" type="submit">Actualizar</button>
            </div>
        </div>
    </form>
</div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>