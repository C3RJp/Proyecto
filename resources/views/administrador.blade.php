<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Admin</title>
</head>
<body background="https://alumni.cornell.edu/wp-content/uploads/2022/12/cool-photo.map_.jpg">
    <header>      
        <nav class="navbar bg-transparent bg-body-secondary">

            <div class="container-fluid d-flex">
                    <a class="navbar-brand" href="#">                            
                    Professional Consulting Services
                    </a>

                    <div class="justify-content-end">
                        <div class="btn ">
                            <a class="text-decoration-none text-black" href="">Contactenos</a>
                        </div>
                        <div class="btn ">
                            <a class="text-decoration-none text-black" href="/">Salir</a>
                        </div>
                    </div>   
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid w-100 mt-5">
          <div class="row text-center">
            <div class="col-4 bg-transparent">              
              <div class="container-fluid w-100 m-auto mt-5 bg-transparent">
                <div class="accordion accordion-flush" id="accordionFlushExample">

                  <!-- Botones de formularios -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-body-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Empleados
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" onclick="boton()">
                        <label class="btn btn-outline-dark" for="vbtn-radio1">Registrar Empleados</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off" onclick="boton2()">
                        <label class="btn btn-outline-dark" for="vbtn-radio2">Consulta Empleados</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off" onclick="boton3()">
                        <label class="btn btn-outline-dark" for="vbtn-radio3">Actualizar Empleados</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio4" autocomplete="off" onclick="boton4()">
                        <label class="btn btn-outline-dark"  for="vbtn-radio4">Desactivar Empleados</label>
                      </div>
                     
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-body-secondary " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Clientes
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off" onclick="boton5()">
                        <label class="btn btn-outline-dark" for="vbtn-radio5">Registrar Clientes</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off" onclick="boton6()">
                        <label class="btn btn-outline-dark" for="vbtn-radio6">Consulta Clientes</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio7" autocomplete="off" onclick="boton7()">
                        <label class="btn btn-outline-dark" for="vbtn-radio7">Actualizar Clientes</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio8" autocomplete="off" onclick="boton8()">
                        <label class="btn btn-outline-dark" for="vbtn-radio8">Desactivar Clientes</label>
                      </div>

                    </div>
                  </div>
                  
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-body-secondary " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Servicios
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio9" autocomplete="off" onclick="boton9()">
                        <label class="btn btn-outline-dark" for="vbtn-radio9">Registrar Servicios</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio10" autocomplete="off" onclick="boton10()">
                        <label class="btn btn-outline-dark" for="vbtn-radio10">Consulta Servicios</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio11" autocomplete="off" onclick="boton11()">
                        <label class="btn btn-outline-dark" for="vbtn-radio11">Actualizar Servicios</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio12" autocomplete="off" onclick="boton12()">
                        <label class="btn btn-outline-dark" for="vbtn-radio12">Desactivar Servicios</label>
                      </div>
                    </div>
                  </div>

                </div>
              </div>              
            </div>
            
      <!-- formularios -->
      <div class="col-8 bg-transparent">
        <div class="card bg-body w-75 m-auto mt-3 mb-2">
            <!-- Formularios Empleados -->
            <div class="card-body" id="fre" style="display: none;">
              <div class="w-100 mb-3" >
                <iframe frameborder="0" width="600" height="600" src="{{url('registroe')}}" >

                </iframe>                
              </div>
            </div>

            <div class="card pt-2" id="fce" style="display: none;">
              <div class="w-100 mb-3">
                <iframe frameborder="1" width="600" height="500" src="{{url('consultae')}}" >

                </iframe>
              </div>
            </div>
            
            <div class="card" id="fae" style="display: none;">
              <div class="w-100 mb-3">
                <iframe frameborder="1" width="600" height="500" src="{{url('actualizacione')}}" >

                </iframe>
              </div>
            </div>

            <div class="card" id="fde" style="display: none;">
              <div class="w-100 mb-3">
                  <iframe frameborder="1" width="600" height="140" src="{{url('borrare')}}" >

                  </iframe>
              </div>  
            </div>            
        </div>            

            <!-- Formularios Clientes -->
            <div class="card" id="frc" style="display: flex;">
              <form class="w-75 m-auto" action="#" method="get">                    
                
                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault01" class="form-label">Cédula</label>
                    <input type="number" min="0" class="form-control" id="validationDefault01" value="" required>
                  </div>

                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault02" class="form-label">Nombres</label>
                    <input type="text"class="form-control" id="validationDefault02" value="" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault03" class="form-label">Apellidos</label>
                    <input type="text"class="form-control" id="validationDefault03" value="" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault04" class="form-label">Teléfono</label>
                    <input type="number" min="0" class="form-control" id="validationDefault04" value="" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault05" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="validationDefault05" value="" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="validationDefault06" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="validationDefault06" value="" required>
                  </div>
                </div>

                <div class="row pt-3">
                  <div class="col-12">
                    <label for="validationDefault07" class="form-label ">Contraseña</label>
                    <input type="text"class="form-control" id="validationDefault07" value="" required>
                  </div>
                </div>

                <div class="col-12 mt-4">
                  <button class="btn btn-dark" type="submit">Registrar</button>
                </div>
              
            </form>
            </div>

            <div class="card" id="fcc" style="display: none;">

            
            <div class="card" id="fac" style="display: none;">
              <form action="#" method="post">
                <div class="w-100 mb-3">
                  <input type="search" name="Buscar" id="">
                  <button type="submit"><img src="./srcs/buscar.png" width="23" height="23" alt="tomado de https://www.flaticon.es"></button>
                </div>
                <div class="w-75 m-auto">
                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault01" class="form-label">Cedula</label>
                      <input type="number" min="0" class="form-control" id="validationDefault01" value="" required>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault02" class="form-label">Nombres</label>
                      <input type="text"class="form-control" id="validationDefault02" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault03" class="form-label">Apellidos</label>
                      <input type="text"class="form-control" id="validationDefault03" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault04" class="form-label">Teléfono</label>
                      <input type="number" min="0" class="form-control" id="validationDefault04" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault05" class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="validationDefault05" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="validationDefault06" class="form-label">Correo</label>
                      <input type="text" class="form-control" id="validationDefault06" value="" required>
                    </div>
                  </div>

                  <div class="row pt-3">
                    <div class="col-12">
                      <label for="validationDefault07" class="form-label ">Contraseña</label>
                      <input type="text"class="form-control" id="validationDefault07" value="" required>
                    </div>
                  </div>
                </div>
                
                <div class="col-12 mt-4">
                  <button class="btn btn-dark" type="submit">Actualizar</button>
                </div>
              </form>
            </div>
            <div class="card" id="fdc" style="display: none;">
              <form>
                <div class="w-100 mb-3">
                  <input type="search" name="Buscar" id="">
                  <button type="submit"><img src="./srcs/buscar.png" width="23" height="23" alt=""></button>
                </div>
                <div>
                  <input class="btn btn-dark" type="submit" value="Desactivar">
                </div>
              </form>
            </div>

            <!-- Formularios Servicios -->
            <div class="card" id="frs" style="display: none;">
              <form action="">
                <div class="row w-75 m-auto">
                  <div class="col-12">
                    <label for="validationDefault08" class="form-label">Número de servicio</label>
                    <input type="number" min="0" class="form-control" id="validationDefault08" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault09" class="form-label">Tipo de servicio</label>
                    <input type="text" class="form-control" id="validationDefault09" value="" required>
                  </div>
                  <div class="col-12 mt-2">
                    <label for="validationDefault10" class="form-label">activo</label>
                    <select class="form-control text-center" name="mora" id="validationDefault10" required>
                      <option value="sin">Sin mora</option>
                      <option id="mora" value="con">Con mora</option>
                    </select>
                  </div>
                  <div class="col-12 mt-4" >
                    <label for="validationDefault11" class="form-label">Dias de mora</label>
                    <input type="number" min="0" max="90" class="form-control" id="validationDefault11" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault12" class="form-label">Número cuotas</label>
                    <input type="number" min="0" max="36" class="form-control" id="validationDefault12" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault13" class="form-label">Adicionales</label>
                    <input type="text" class="form-control" id="validationDefault13" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault14" class="form-label">Valor adicional</label>
                    <input type="number" min="0" class="form-control" id="validationDefault14" value="" required>
                  </div>                  
                  <div class="col-12">
                    <label for="validationDefault15" class="form-label">Valor contrato</label>
                    <input type="number" min="0" class="form-control" id="validationDefault15" value="" required>
                  </div>                  
                  <input class="btn btn-dark w-25 m-auto mt-2" type="submit" value="Registrar">

                </div>
              </form>              
            </div>
            <div class="card" id="fcs" style="display: none;">
              <form action="#" method="get">        
                <div class="w-100 mb-3">
                  <input type="search" name="Buscar" id="">
                  <button type="submit"><img src="./srcs/buscar.png" width="23" height="23" alt=""></button>
                </div>

                <table class="table" >
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Activo</th>
                      <th scope="col">Cédula</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">celular</th>
                      <th scope="col">Dirección</th>
                      <th scope="col">Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
            <div class="card" id="fas" style="display: none;">
              <form action="">
                <div class="row w-75 m-auto">
                  <div class="col-12 mt-2">
                    <label for="validationDefault10" class="form-label">activo</label>
                    <select class="form-control text-center" name="mora" id="validationDefault10" required>
                      <option value="sin">Sin mora</option>
                      <option id="mora" value="con">Con mora</option>
                    </select>
                  </div>
                  <div class="col-12 mt-4">
                    <label for="validationDefault12" class="form-label">Número cuotas</label>
                    <input type="number" min="0" max="36" class="form-control" id="validationDefault12" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault13" class="form-label">Adicionales</label>
                    <input type="text" class="form-control" id="validationDefault13" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="validationDefault14" class="form-label">Valor adicional</label>
                    <input type="number" min="0" class="form-control" id="validationDefault14" value="" required>
                  </div>                  
                  <div class="col-12">
                    <label for="validationDefault15" class="form-label">Valor contrato</label>
                    <input type="number" min="0" class="form-control" id="validationDefault15" value="" required>
                  </div>                  
                  <input class="btn btn-dark w-25 m-auto mt-2" type="submit" value="Actualizar">
                </div>
              </form>
            </div>
            <div class="card" id="fds" style="display: none;">
              <form>
                <div class="w-100 mb-3">
                  <input type="search" name="Buscar" id="">
                  <button type="submit"><img src="./srcs/buscar.png" width="23" height="23" alt=""></button>
                </div>
                <div>
                  <input class="btn btn-dark" type="submit" value="Desactivar">
                </div>
              </form>            
            </div>

        </div>
    </div> 

    </main>

    <footer>
        <nav class="navbar sticky-bottom bg-transparent">
            <div class="container-fluid justify-content-end">
              <a class="navbar-brand " href="#">Copy Right ©</a>
            </div>
        </nav>
    </footer>

    <script>
      // botones de gestion empleados
      function boton(){
        limpiarc();
        limpiars();
        document.getElementById('fre').style.display='flex';
        document.getElementById('fce').style.display='none';
        document.getElementById('fae').style.display='none';
        document.getElementById('fde').style.display='none';
      }
      function boton2(){
        limpiarc();
        limpiars();
        document.getElementById('fre').style.display='none';
        document.getElementById('fce').style.display='flex';
        document.getElementById('fae').style.display='none';
        document.getElementById('fde').style.display='none';        
      }
      function boton3(){
        limpiarc();
        limpiars();
        document.getElementById('fre').style.display='none';
        document.getElementById('fce').style.display='none';
        document.getElementById('fae').style.display='flex';
        document.getElementById('fde').style.display='none';
      }        
      function boton4(){
        limpiarc();
        limpiars();
        document.getElementById('fre').style.display='none';
        document.getElementById('fce').style.display='none';
        document.getElementById('fae').style.display='none';
        document.getElementById('fde').style.display='flex';
      }
      
      // botones de gestion clientes
      function boton5(){
        limpiare();
        limpiars();
        document.getElementById('frc').style.display='flex';
        document.getElementById('fcc').style.display='none';
        document.getElementById('fac').style.display='none';
        document.getElementById('fdc').style.display='none';
      }
      function boton6(){
        limpiare();
        limpiars();
        document.getElementById('frc').style.display='none';
        document.getElementById('fcc').style.display='flex';
        document.getElementById('fac').style.display='none';
        document.getElementById('fdc').style.display='none';
      }
      function boton7(){
        limpiare();
        limpiars();
        document.getElementById('frc').style.display='none';
        document.getElementById('fcc').style.display='none';
        document.getElementById('fac').style.display='flex';
        document.getElementById('fdc').style.display='none';
      }
      function boton8(){
        limpiare();
        limpiars();
        document.getElementById('frc').style.display='none';
        document.getElementById('fcc').style.display='none';
        document.getElementById('fac').style.display='none';
        document.getElementById('fdc').style.display='flex';
      }
      
      // botones de gestion servicios
      function boton9(){
        limpiare();
        limpiarc();
        document.getElementById('frs').style.display='flex';
        document.getElementById('fcs').style.display='none';
        document.getElementById('fas').style.display='none';
        document.getElementById('fds').style.display='none';
      }
      function boton10(){
        limpiare();
        limpiarc();
        document.getElementById('frs').style.display='none';
        document.getElementById('fcs').style.display='flex';
        document.getElementById('fas').style.display='none';
        document.getElementById('fds').style.display='none';
      }
      function boton11(){
        limpiare();
        limpiarc();
        document.getElementById('frs').style.display='none';
        document.getElementById('fcs').style.display='none';
        document.getElementById('fas').style.display='flex';
        document.getElementById('fds').style.display='none';
      }
      function boton12(){
        limpiare();
        limpiarc();
        document.getElementById('frs').style.display='none';
        document.getElementById('fcs').style.display='none';
        document.getElementById('fas').style.display='none';
        document.getElementById('fds').style.display='flex';
      }
      
      // botones de limpieza generales
      function limpiare(){
        document.getElementById('fre').style.display='none';
        document.getElementById('fce').style.display='none';
        document.getElementById('fae').style.display='none';
        document.getElementById('fde').style.display='none';
      }
      function limpiarc(){
        document.getElementById('frc').style.display='none';
        document.getElementById('fcc').style.display='none';
        document.getElementById('fac').style.display='none';
        document.getElementById('fdc').style.display='none';
      }
      function limpiars(){
        document.getElementById('frs').style.display='none';
        document.getElementById('fcs').style.display='none';
        document.getElementById('fas').style.display='none';
        document.getElementById('fds').style.display='none';
      }  
      function botonc(){
        limpiarc();
        limpiars();
        document.getElementById('fre').style.display='none';
        document.getElementById('fce').style.display='flex';
        document.getElementById('fae').style.display='none';
        document.getElementById('fde').style.display='none';
      }    
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>