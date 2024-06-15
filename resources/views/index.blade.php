<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inicio De Sesion</title>
</head>
<body class="" background="https://10wallpaper.com/wallpaper/1366x768/1805/Japan_tokyo_statue_of_liberty_Statue_night_scene_1366x768.jpg">
    <header>      
        <nav class="navbar border border-black bg-transparent bg-body-secondary object-fit-xxl-contain rounded">
            <div class="container-fluid d-flex">
                <a class="navbar-brand" href="#">                            
                Professional Consulting Services
                </a>

                <div class="justify-content-end">
                    <div class="btn ">
                        <a class="text-decoration-none text-black" href="contactenos">Contactenos</a>
                    </div>                    
                </div>   
            </div>
        </nav>
    </header>   


    <div class="container-fluid bg-transparent mt-5 object-fit-xxl-contain " >    
    <form class=" bg-transparent w-50 mt-5 m-auto object-fit-xxl-contain rounded" method="post" action="{{ route('valid') }}">
        @csrf
        <div class="input-group mb-3 mt-5">
        <span class="input-group-text bg-transparent text-light ">Cedula</span>
        <input type="number" min="0" max="9999999999" class="form-control" placeholder="Cedula" name="cedula" required>
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text bg-transparent text-light">Contraseña</span>
        <input type="Password" class="form-control" placeholder="Contraseña" name="clave" required>
        </div>
        <div class="input-group mb-5 justify-content-center">
        <input class="btn btn-light text-black mt-3" type="submit" value="Ingresar">
        </div>
    </form> 
    </div>

    <footer>
        <nav class="navbar fixed-bottom bg-transparent">
            <div class="container-fluid justify-content-end">
              <a class="navbar-brand" href="#">Copy Right ©</a>
            </div>
        </nav>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>