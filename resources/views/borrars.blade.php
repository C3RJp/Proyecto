<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DesactivarServicio</title>
</head>
<body>
    <form class="form mt-3 text-center" action="" method="post">
        <div class="w-100 mb-3">
        @csrf
            <div class="row">
                <div class="col-12">
                    <input type="search" name="numeroContrato">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12">
                    <input class="btn btn-dark mt-3" type="submit" value="Desactivar">
                </div>
            </div>
            
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>