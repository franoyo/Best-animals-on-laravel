<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style70.css?v=1.1')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div id="main-container" class="main-container">
        <main class="contenedor-alerta">
            <div class="iconx-container">
                <div id="boton" onclick="cerrar()" class="button-x">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
            <div class="text-container">
                <div class="put-text">
                @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
                </div>
            </div>
        </main>
    </div>
</body>
</html>