<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/styleFullInfoCss.css?v=1.12')}}">
</head>
<body>
    <div class="principal-container" id="alerta-form">
<div class="espect-container">
<header class="container-header">
    <div class="cion">
        <img class="logo" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
    </div>
    <div class="title-form">
        INFORMACION DE LA CITA
    </div>
    <div class="cion">
        <button class="botoncito" id="cerrahte">X</button>
    </div>
</header>
<main class="main-content-container">
    <div class="row-form-container">
        <div class="subtitle">ID:</div>
        <div class="info-container">
            <input class="read-text" type="text" id="recepcion" readonly>
        </div>
        <div class="subtitle">NOMBRE DEL DUEÑO:</div>
        <div class="info-container">
            <input class="read-text" type="text" id="nombre-dueño" readonly>
        </div>
        <div class="subtitle">APELLIDO DEL DUEÑO:</div>
        <div class="info-container">
            <input class="read-text" id="apellido" type="text" readonly>
        </div>
        <div class="subtitle">CELULAR:</div>
        <div class="info-container">
            <input class="read-text" id="celular" type="text" readonly>
        </div>
    </div>
    <div class="row-form-container">
        <div class="subtitle">DIRECCION:</div>
        <div class="info-container">
            <input class="read-text" id="direccion" type="text" readonly>
        </div>
        <div class="subtitle">DOCUMENTO:</div>
        <div class="info-container">
            <input class="read-text" id="documento" type="text" readonly>
        </div>
        <div class="subtitle">EMAIL:</div>
        <div class="info-container">
            <input class="read-text" id="email" type="text" readonly>
        </div>
        <div class="subtitle">NOMBRE DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="nombre_mascota" type="text" readonly>
        </div>
    </div>
    <div class="row-form-container">
        <div class="subtitle">RAZA DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="raza_mascota" type="text" readonly>
        </div>
        <div class="subtitle">GENERO DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="genero_mascota" type="text" readonly>
        </div>
        <div class="subtitle">COLOR DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="color_mascota" type="text" readonly>
        </div>
        <div class="subtitle">ESPECIE DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="especie_mascota" type="text" readonly>
        </div>
    </div>
    <div class="row-form-container">
        <div class="subtitle">FECHA DE NACIMIENTO DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="nacimiento_mascota" type="text" readonly>
        </div>
        <div class="subtitle">EDAD DE LA MASCOTA:</div>
        <div class="info-container">
            <input class="read-text" id="edad_mascota" type="text" readonly>
        </div>
        <div class="subtitle">FECHA DE LA CITA:</div>
        <div class="info-container">
            <input class="read-text" type="text" id="fecha_cita" readonly>
        </div>
        <div class="subtitle">HORA DE LA CITA:</div>
        <div class="info-container">
            <input class="read-text" id="hora_cita" type="time" readonly>
        </div>
    </div>
    <div class="row-form-container">
        <div class="subtitle"></div>
        <div class="info-container">

        </div>
        <div class="subtitle">SERVICIO:</div>
        <div class="info-container">
            <input class="read-text" id="servicio" type="text" readonly>
        </div>
        <div class="subtitle">ESTADO DE LA CITA:</div>
        <div class="info-container">
            <input class="read-text" id="estado_cita" type="text" readonly>
        </div>
        <div class="subtitle"></div>
        <div class="info-container">
           
        </div>
    </div>
</main>
</div>

    </div>
</body>
</html>