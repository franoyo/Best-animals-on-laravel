<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/stylealertaConfirmarCita.css?v=1.0')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<header class="container10-alerta" id="alertitas-aceptar">
<form class="alerta-confirmar" action="{{route('confirmarCita.admin')}}" method="post">
    @csrf
<div class="main-content">
    <div class="put-image">
        <i class="bi bi-exclamation-triangle-fill"></i>
    </div>
    <div class="text">
        <div class="main-text">
            ESTA SEGURO DE CONFIRMAR LA CITA? DE ID:
        </div>
        <div class="id">
            <input type="text" name="id" class="inputsito" id="recibe" readonly>
        </div>
    </div>
</div>
<div class="enter-buttons">
    <input class="ton" type="submit" value="SI">
    <input class="ton" type="button" onclick="cerratAceptar()" id="zerrate" value="NO">
</div>

</form>

</header>
</body>
</html>