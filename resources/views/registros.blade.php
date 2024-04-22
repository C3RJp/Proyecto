<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registroc</title>
</head>
<body>
    <form action="{{route('regS')}}" method="post" class="text-center">
                @csrf

                <div class="row">
                    <div class="col-12">
                      <label for="validationDefault08" class="form-label">Numero De Contrato</label>
                      <input type="number" min="0" class="form-control" id="validationDefault08" name="numContrato" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                      <label for="validationDefault07" class="form-label">Cedula De Abogado</label>
                      <input type="number" min="0" class="form-control" id="validationDefault07" name="cedulaAbogado" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                      <label for="validationDefault08" class="form-label">Cedula De Cliente</label>
                      <input type="number" min="0" class="form-control" id="validationDefault08" name="CedulaCliente" required>
                    </div>
                </div>

                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault02" class="form-label">Numero De Cuotas</label>
                      <input type="number" min="0" class="form-control" id="validationDefault02" Name="numCuotas" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault03" class="form-label">Adicionales</label>
                      <input type="text" class="form-control" id="validationDefault03" Name="adicionales" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault04" class="form-label">Valor Adicional</label>
                      <input type="number" class="form-control" id="validationDefault04" Name="valorAdicional" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault05" class="form-label">Valor De Contrato</label>
                      <input type="number" class="form-control" id="validationDefault05" Name="valorContrato" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault06" class="form-label">Valor De Cuota Inicial</label>
                      <input type="number" class="form-control" id="validationDefault06" Name="valorCuotaI" required>
                    </div>
                  </div>

                  <div class="col-12 mt-4">
                    <button class="btn btn-dark" type="submit">Registrar</button>
                  </div>
                </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>