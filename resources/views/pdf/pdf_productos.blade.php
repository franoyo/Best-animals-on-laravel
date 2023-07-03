<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Historias clinicas {{$fecha}}</title>
    <link rel="stylesheet" href="{{asset('css/stylePdfProductos.css?v=0.2')}}">
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
    <div class="section"><div class="subtitle">Creado Por:</div>
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
<div class="titulo-dueño">IMAGEN</div>

<div class="telefono-dueño">DESCRIPCION</div>
<div class="nombre-mascota">MARCA</div>
<div class="edad-mascota">PESO</div>
<div class="peso-mascota">STOCK</div>
<div class="peso-mascota">PRECIO</div>
<div class="peso-mascota">UBICACION</div>
<div class="tratamiento">FECHA DE VENCIMIENTO</div>
</div>
@foreach ($productos as $producto )
    

<div class="info-container">
<div class="titulo-id">{{$producto->id}}</div>
<div class="titulo-dueño">
    <img class="img-producto" src="{{asset($producto->imagen)}}" alt="alt">
</div>

<div class="telefono-dueño">{{$producto->descripcion}}</div>
<div class="nombre-mascota">{{$producto->marca}}</div>
<div class="edad-mascota">{{$producto->peso}} Kilogramos</div>
<div class="peso-mascota">{{$producto->stock}}</div>
<div class="peso-mascota">{{$producto->precio}} Pesos</div>
<div class="peso-mascota">{{$producto->ubicacion}}</div>
<div class="tratamiento">{{$producto->vencimiento}}</div>
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