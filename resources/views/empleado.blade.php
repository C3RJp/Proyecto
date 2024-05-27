<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Empleado</title>
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
<div class="container-fluid d-flex justify-content-center pt-3">
    <div class="col bg-transparent ">

        <div class="accordion accordion-flush  " id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-body-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Clientes
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    
                    <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" onclick="boton()">
                    <label class="btn btn-outline-dark" for="vbtn-radio1">Registrar Clientes</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off" onclick="boton1()">
                    <label class="btn btn-outline-dark" for="vbtn-radio2">Consulta Clientes</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off" onclick="boton2()">
                    <label class="btn btn-outline-dark" for="vbtn-radio3">Actualizar Clientes</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio4" autocomplete="off" onclick="boton3()">
                    <label class="btn btn-outline-dark"  for="vbtn-radio4">Desactivar Clientes</label>
                    </div>
                
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-body-secondary " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Servicios
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off" onclick="boton4()">
                    <label class="btn btn-outline-dark" for="vbtn-radio5">Registrar Servicios</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off" onclick="boton5()">
                    <label class="btn btn-outline-dark" for="vbtn-radio6">Consulta Servicios</label>

                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio9" autocomplete="off" onclick="boton8()">
                    <label class="btn btn-outline-dark" for="vbtn-radio9">Consulta Facturas</label>

                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio7" autocomplete="off" onclick="boton6()">
                    <label class="btn btn-outline-dark" for="vbtn-radio7">Actualizar Servicios</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio8" autocomplete="off" onclick="boton7()">
                    <label class="btn btn-outline-dark" for="vbtn-radio8">Desactivar Servicios</label>
                    </div>

                </div>
            </div>            
        </div>

    </div>
<!-- Formularios -->
    <div class="col-8 bg-transparent" >
    <div class="container-fluid  m-auto" >
<!-- Clientes -->
        <div class="card" id="efrc" style="display: none">
            <div class="w-100 mb-3">
                <iframe frameborder="1" width="850" height="700" src="{{url('registroc')}}"></iframe>
            </div>  
        </div>
        
        <div class="card" id="efcc" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="900" height="600" src="{{url('consultac')}}"></iframe>
        </div>
        </div>

        <div class="card" id="efac" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="850" height="700" src="{{url('actualizacionc')}}"></iframe>
        </div>              
        </div>
          
        <div class="card" id="efdc" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="800" height="400" src="{{url('borrarc')}}"></iframe>
        </div>              
        </div>
<!-- Servicios -->
        <div class="card" id="efrs" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="850" height="650" src="{{url('registros')}}"></iframe>
        </div>     
        </div>

        <div class="card" id="efcs" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="900" height="600" src="{{url('consultas')}}"></iframe>
        </div>
        </div>

        <div class="card" id="efcf" style="display: none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="900" height="600" src="{{url('consultaf')}}"></iframe>
        </div>
        </div>

        <div class="card" id="efas" style="display:none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="850" height="750" src="{{url('actualizacions')}}"></iframe>
        </div>
        </div>

        <div class="card" id="efds" style="display:none">
        <div class="w-100 mb-3">
            <iframe frameborder="1" width="850" height="400" src="{{url('borrars')}}"></iframe>
        </div>    
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>      
      // botones de gestion clientes
      function boton(){         
        limpiars();  
        document.getElementById('efrc').style.display='flex';
        document.getElementById('efcc').style.display='none';
        document.getElementById('efac').style.display='none';
        document.getElementById('efdc').style.display='none';        
      }
      function boton1(){
        limpiars();                
        document.getElementById('efrc').style.display='none';
        document.getElementById('efcc').style.display='flex';
        document.getElementById('efac').style.display='none';
        document.getElementById('efdc').style.display='none';                
      }
      function boton2(){
        limpiars();                
        document.getElementById('efrc').style.display='none';
        document.getElementById('efcc').style.display='none';
        document.getElementById('efac').style.display='flex';
        document.getElementById('efdc').style.display='none';                
      }
      function boton3(){
        limpiars();                
        document.getElementById('efrc').style.display='none';
        document.getElementById('efcc').style.display='none';
        document.getElementById('efac').style.display='none';
        document.getElementById('efdc').style.display='flex';        
      }
             // botones de gestion servicios
      function boton4(){                
        limpiarc();
        document.getElementById('efrs').style.display='flex';
        document.getElementById('efcs').style.display='none';
        document.getElementById('efcf').style.display='none';
        document.getElementById('efas').style.display='none';
        document.getElementById('efds').style.display='none';        
      }
      function boton5(){                
        limpiarc();
        document.getElementById('efrs').style.display='none';
        document.getElementById('efcs').style.display='flex';
        document.getElementById('efcf').style.display='none';
        document.getElementById('efas').style.display='none';
        document.getElementById('efds').style.display='none';
        
      }
      function boton8(){                
        limpiarc();
        document.getElementById('efrs').style.display='none';
        document.getElementById('efcs').style.display='none';
        document.getElementById('efcf').style.display='flex';
        document.getElementById('efas').style.display='none';
        document.getElementById('efds').style.display='none';
      }
      function boton6(){                
        limpiarc();
        document.getElementById('efrs').style.display='none';
        document.getElementById('efcs').style.display='none';
        document.getElementById('efcf').style.display='none';
        document.getElementById('efas').style.display='flex';
        document.getElementById('efds').style.display='none';        
        
      }
      function boton7(){                
        limpiarc();
        document.getElementById('efrs').style.display='none';
        document.getElementById('efcs').style.display='none';
        document.getElementById('efcf').style.display='none';
        document.getElementById('efas').style.display='none';
        document.getElementById('efds').style.display='flex';
                
      }

      // botones de limpieza generales
      function limpiarc(){
        document.getElementById('efrc').style.display='none';
        document.getElementById('efcc').style.display='none';
        document.getElementById('efac').style.display='none';
        document.getElementById('efdc').style.display='none';        
      }
      function limpiars(){
        document.getElementById('efrs').style.display='none';
        document.getElementById('efcs').style.display='none';
        document.getElementById('efas').style.display='none';
        document.getElementById('efds').style.display='none';
        
      }        
</script>
</body>
</html>