<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultae</title>
</head>
<body>
<div class="text center ">
                <form class="text-center" action="" method="post">
                  <input type="search" name="cedula_empleado" id="">
                  <button type="submit">Buscar</button>
                  @csrf                  
                </form>
                <br>

                <div>
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                      </tr>
                    </thead>

                    <?php
                    $cedulaEmpleado=request('cedula_empleado');
                    $conexion=mysqli_connect('localhost','root','','empresa');
                    $consulta=" SELECT cedula, nombres, apellidos, celular, direccion, correoE FROM `empleado` ";
                    $ds=mysqli_query($conexion, $consulta);                    
                    if ($cedulaEmpleado){
                      $consultaEspecifica=" SELECT cedula, nombres, apellidos, celular, direccion, correoE FROM `empleado` WHERE cedula = $cedulaEmpleado";
                      $rse=mysqli_query($conexion, $consultaEspecifica);
                      if($data=mysqli_fetch_row($rse)){
                    ?>
                      <tr>
                        <td><?php echo $data[0]?></td>
                        <td><?php echo $data[1]?></td>
                        <td><?php echo $data[2]?></td>
                        <td><?php echo $data[3]?></td>
                        <td><?php echo $data[4]?></td>
                        <td><?php echo $data[5]?></td>
                      </tr>
                  <?php }}

                    while ($rs=mysqli_fetch_row($ds)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $rs[0]?></td>
                        <td><?php echo $rs[1]?></td>
                        <td><?php echo $rs[2]?></td>
                        <td><?php echo $rs[3]?></td>
                        <td><?php echo $rs[4]?></td>
                        <td><?php echo $rs[5]?></td>
                      </tr>
                    </tbody>
                    <?php }?>
                  </table>                  
                </div>
              </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>