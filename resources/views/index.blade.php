<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inicio De Sesion</title>
</head>
<body background="https://10wallpaper.com/wallpaper/1366x768/1805/Japan_tokyo_statue_of_liberty_Statue_night_scene_1366x768.jpg">
    
    <header>
        <div class="d-inline-flex m-lg-3">            
            <a class="text-decoration-none text-white p-lg-5" href="#"><h2>Professional Consulting Services</h1></a>                               
        </div>
    </header>

    <main>
       <div class="row w-100">
            <div class="col w-100">
                <div class="card-group w-75 m-auto mt-lg-4">
                    
                    <div class="card-body pt-4">
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Número de cédula</label>
                                <input type="number" min="0" class="form-control" id="cedula" name="cedula" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text text-white-50">Por favor ingresé su número de cédula.</div>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-white">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="clave">
                              </div>                              
                              <div class="w-25 m-auto">
                               <button type="submit" class="btn btn-dark w-100">Ingresar</button>
                              </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
       </div>      
    </main>

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