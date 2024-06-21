<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Clientes</title>
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
                        <a class="text-decoration-none text-black" href="contactenos">Contactenos</a>
                    </div>
                    <div class="btn ">
                        <a class="text-decoration-none text-black" href="/">Salir</a>
                    </div>
                </div>   
        </div>
    </nav>
</header>

<main>
<div class="w-auto bg-transparent" id="formularios">
    <div class="w-100 border border-black ">
        <div class="accordion accordion-flush  " id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-body-secondary " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Servicios
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio7" autocomplete="off" onclick="boton1()">
                    <label class="btn btn-outline-dark" for="vbtn-radio7">Registro Pago</label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off" onclick="boton()">
                    <label class="btn btn-outline-dark" for="vbtn-radio6">Consulta Servicios</label>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="w-100 mt-2">
        <div class="w-100" id="cfcs" style="display: none">
            <iframe frameborder="0" width="850" height="500" src="{{url('consultasc')}}"></iframe>
        </div>
        <div class="w-100" id="cfas" style="display: none">
            <iframe frameborder="0" width="850" height="500" src="{{url('registrofacturas')}}"></iframe>
        </div>
    </div>
</div>
<div class="w-100 h-300 bg-transparent">
    Hola
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
  let navegador = navigator.userAgent;
    if (window.innerWidth <= 768) {
        
        document.getElementById('formularios').style.display='block';
    }
    else
    {
        document.getElementById('formularios').style.display='flex';
    } 
      // botones de gestion clientes     
      function boton()
      {         
        document.getElementById('cfcs').style.display='flex';
        document.getElementById('cfas').style.display='none';        
      }
      function boton1()
      {         
        document.getElementById('cfcs').style.display='none';
        document.getElementById('cfas').style.display='flex';        
      }      
       
</script>
</body>
</html>