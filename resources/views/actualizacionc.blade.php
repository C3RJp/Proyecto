<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ActualizarEmpleado</title>
</head>
<body>
<div class="w-100">
<div class="w-75 m-auto">
    <form class="border" action="" method="get">
        <div class="input-group d-flex justify-content-center">
            <span class="input-group-text bg-dark text-light" id="">Cedula</span>
            <input name="cedula" type="number" min="1" max="9999999999" class="" placeholder="">
            <input class="btn btn-outline-secondary bg-dark text-light" type="submit" value="Buscar">
        </div>
    </form>
    @foreach ($cliente as $cli)
        @php
        $nombres=$cli->nombres;
        $apellidos=$cli->apellidos;
        $celular=$cli->celular;
        $direccion=$cli->direccion;
        $correo=$cli->correo;
        
        $clave=$cli->clave;        
        @endphp
    @endforeach
    <form class="text-center" action="" method="post">
        <div class="w-75 m-auto">
            @csrf

            <div class="row">
            <div class="col-12">
                <label for="validationDefault02" class="form-label">Nombres</label>
                <input name="nombreCA" type="text"class="form-control" id="validationDefault02" placeholder="@php echo $nombres; @endphp " >
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <label for="validationDefault03" class="form-label">Apellidos</label>
                <input name="apellidoCA" type="text"class="form-control" id="validationDefault03" placeholder="@php echo $apellidos; @endphp " >
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <label for="validationDefault05" class="form-label">Celular</label>
                <input name="celularCA" type="number" min="0" class="form-control" id="validationDefault05" placeholder="@php echo $celular; @endphp " >
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <label for="validationDefault04" class="form-label">Dirección</label>
                <input name="direccionCA" type="text" class="form-control" id="validationDefault04" placeholder="@php echo $direccion; @endphp " >
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <label for="validationDefault06" class="form-label">Correo</label>
                <input name="correoCA" type="text" class="form-control" id="validationDefault06" placeholder="@php echo $correo; @endphp " >
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <label for="validationDefault07" class="form-label">Nacionalidad</label>
                <select class="form-select" name="nacionalidadCA">
                    <option value="Colombiano">Colombiano</option>
                    <option value="Venezolano">Venezolano</option>
                    <option value="Peruano">Peruano</option>
                    <option value="Argentino">Argentino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            </div>

            <div class="row pt-3">
            <div class="col-12">
                <label for="validationDefault08" class="form-label ">Contraseña</label>
                <input name="claveCA" type="text"class="form-control" id="validationDefault08" placeholder="@php echo $clave; @endphp " >
            </div>
            </div>
        </div>
        
        
        <div class="col-12 mt-4">
            <button class="btn btn-dark" type="submit">Actualizar</button>
        </div>
        
    </form> 
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>