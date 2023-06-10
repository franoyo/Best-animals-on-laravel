<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style23.css?v=1.0')}}">
    <title>alerta</title>
</head>
<body>
    <div class="contenedor-alerta" id="alertita">
<form action="{{route('deleteHistoria')}}" class="alerta" method="post">
    @csrf
<div class="mitad1">
    <div class="put-foto">
        <img class="foto" src="{{asset('img/alerta-removebg-preview.png')}}" alt="alerta">
    </div>
    <div class="put-text" >
        <div class="text">ESTA SEGURO DE ELIMINAR EL PRODUCTO? DE ID:</div>
        <div class="put-input">
            <input class="inpit" name="id" id="recepcion" type="text" readonly>
        </div>
    </div>
</div>

<div class="mitad-botones">

<input class="boton-confirm" type="submit" value="SI">
<input class="boton-confirm" type="button" id="close" value="NO">  
</div>

</form>

    </div>

</body>
</html>