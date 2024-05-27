<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <form action="{{route('regE')}}" method="post" class="text-center">
                @csrf
                <div class="row">
                    <div class="col-12">
                      <label for="validationDefault01" class="form-label">Cédula</label>
                      <input type="number" min="0" max="9999999999" class="form-control" id="validationDefault01" name="cedula" required>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault02" class="form-label">Nombres</label>
                      <input type="text"class="form-control" id="validationDefault02" Name="nombres" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault03" class="form-label">Apellidos</label>
                      <input type="text"class="form-control" id="validationDefault03" Name="apellidos" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault04" class="form-label">Celular</label>
                      <input type="number" min="0" max="9999999999" class="form-control" id="validationDefault04" Name="celular" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault05" class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="validationDefault05" Name="direccion" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault06" class="form-label">Correo</label>
                      <input type="text" class="form-control" id="validationDefault06" Name="correo" required>
                    </div>
                  </div>

                  <div class="row pt-3">
                    <div class="col-12">
                      <label for="validationDefault07" class="form-label ">Contraseña</label>
                      <input type="text"class="form-control" id="validationDefault07" Name="clave" required>
                    </div>
                  </div>

                  <div class="col-12 mt-4">
                    <button class="btn btn-dark" type="submit">Registrar</button>
                  </div>
                </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>