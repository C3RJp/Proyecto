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
        <div class="card bg-body w-100 m-auto mt-3 mb-2">
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
          <div class="card" id="frc" style="display: none;">
            <div class="w-100 mb-3">
              <iframe frameborder="1" width="600" height="500" src="{{url('registroc')}}">

              </iframe>
            </div>
          </div>

          <div class="card" id="fcc" style="display: none;">
            <div class="w-100 mb-3">
              <iframe frameborder="1" width="600" height="500" src="{{url('consultac')}}">

              </iframe>
            </div>
          </div>
            
          <div class="card" id="fac" style="display: none;">
            <div class="w-100 mb-3">
              <iframe frameborder="1" width="600" height="500" src="{{url('actualizacionc')}}">

              </iframe>
            </div>              
          </div>
          
          <div class="card" id="fdc" style="display: none;">
            <div class="w-100 mb-3">
              <iframe frameborder="1" width="600" height="140" src="{{url('borrarc')}}">

              </iframe>
            </div>              
          </div>

            <!-- Formularios Servicios -->
            <div class="card" id="frs" style="display: none;">
              <div class="w-100 mb-3">
                <iframe frameborder="1" width="600" height="500" src="{{url('registros')}}">

                </iframe>
              </div>     
            </div>

            <div class="card" id="fcs" style="display: none;">
              <div class="w-100 mb-3">
                <iframe frameborder="1" width="800" height="500" src="{{url('consultas')}}">

                </iframe>
              </div>
            </div>

            <div class="card" id="fas" style="display:none;">
              <div class="w-100 mb-3">
                <iframe frameborder="1" width="800" height="500" src="{{url('actualizacions')}}">

                </iframe>
              </div>
            </div>

            <div class="card" id="fds" style="display:none;">
              <div class="w-100 mb-3">
                  <iframe frameborder="1" width="800" height="500" src="{{url('borrars')}}">

                  </iframe>
              </div>    
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