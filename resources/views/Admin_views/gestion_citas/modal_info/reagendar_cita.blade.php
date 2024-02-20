<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagendar cita</title>
    <link rel="stylesheet" href="{{asset('css/styleReagendarCita.css?v=1.12')}}">
</head>
<body>
    <div class="container-main-form" id="reagendar-modal">
        <form class="formulario" action="{{route('modificarCita.cliente')}}" method="post">
            @csrf
<header class="encabezado-container">
<div class="put-logo-button">
    <img class="img-logo" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
</div>
<div class="put-title">REAGENDAR CITA</div>
<div class="put-logo-button">
    <input id="cerrar-tbn" onclick="cerrarCito()" type="button" value="x">
</div>
</header>
<div class="content-form">
<div class="division">
HORA DE LA CITA:
<input type="text" name="id" id="receptacion" hidden>
<input class="inputz" name="hora" id="hora" type="time" min="09:00" max="20:00">
</div>
<div class="division">
FECHA DE LA CITA:
<input class="inputz" name="fecha" id="fecha" type="date" min="{{ now()->format('Y-m-d') }}" >
</div>
<div class="division">
SERVICIO:
<select name="servicio" >
<option id="select-service" value=""  selected>
</option>
            @foreach ($servicios as $servicio )
            <option value="{{$servicio->id}}">{{$servicio->nombre_servicio}}</option>
            @endforeach
</select>
</div>
<div class="division">
<input id="reagendar-btn" type="submit" value="reagendar">
</div>

</div>

</form>
    </div>
</body>
</html>