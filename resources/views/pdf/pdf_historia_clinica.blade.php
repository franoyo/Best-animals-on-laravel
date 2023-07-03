<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Historias clinicas {{$fecha}}</title>
    <link rel="stylesheet" href="{{asset('css/stylePdfHistoria.css?v=0.1')}}">
</head>
<body>
    <header class="header-container">
<a class="put-logo" href="{{route('listaHistorias')}}" >
    <img class="logo" src="{{asset('img/best animal2-01 (1).png')}}" alt="logo">
</a>
<div class="put-title">REPORTE HISTORIAS CLINICAS</div>
<div class="put-logo">
    <div class="section"><div class="subtitle">Creado El:</div>
<div class="put-fecha">{{$fecha}}</div>
</div>
    <div class="section"><div class="subtitle">Creado por:</div>
    <div class="put-fecha">{{ auth()->guard('empleado')->user()->name }} {{ auth()->guard('empleado')->user()->apellido }}</div>
</div>
</div>

    </header>
    
    <div class="linea-container">
    <div class="linea"></div>

</div>
<main class="tabla-container">
<div class="titulos-container">
<div class="titulo-id">ID</div>
<div class="titulo-dueño">NOMBRE DUEÑO</div>
<div class="telefono-dueño">TELEFONO</div>
<div class="telefono-dueño">DIRECCION</div>
<div class="nombre-mascota">NOMBRE MASCOTA</div>
<div class="edad-mascota">EDAD MASCOTA</div>
<div class="peso-mascota">PESO MASCOTA</div>
<div class="peso-mascota">SEXO MASCOTA</div>
<div class="peso-mascota">RAZA MASCOTA</div>
<div class="tratamiento">TRATAMIENTO</div>
</div>
@foreach ($historias as $historia )
    

<div class="info-container">
<div class="titulo-id">{{$historia->id}}</div>
<div class="titulo-dueño">{{$historia->nombre_dueño}}</div>
<div class="telefono-dueño">{{$historia->telefono_dueño}}</div>
<div class="telefono-dueño">{{$historia->direccion_dueño}}</div>
<div class="nombre-mascota">{{$historia->nombre_mascota}}</div>
<div class="edad-mascota">{{$historia->edad_mascota}}</div>
<div class="peso-mascota">{{$historia->peso_mascota}}</div>
<div class="peso-mascota">{{$historia->sexo_mascota}}</div>
<div class="peso-mascota">{{$historia->raza_mascota}}</div>
<div class="tratamiento">{{$historia->tratamiento}}</div>
</div>
@endforeach
</main>
<script>
        // Espera a que el documento se cargue completamente
        document.addEventListener('DOMContentLoaded', function() {
            window.print();
        });
    </script>

</body>
</html>