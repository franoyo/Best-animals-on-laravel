<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Empleados {{$fecha}}</title>
    <link rel="stylesheet" href="{{asset('css/stylePDFClientes.css?v=1.35')}}">
</head>
<body>
   
    <header class="container-header">
<div class="put-logo">
    <img class="imagen" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
</div>
<div class="put-titulo">REPORTE DE EMPLEADOS</div>
<div class="put-logo-1"><div class="create-at"><div class="subtitle">Creado el:</div><div class="put-fecha">{{$fecha}}</div></div><div class="update-at"><div class="subtitle">Creado por:</div><div class="put-fecha">{{ auth()->guard('empleado')->user()->name }} {{ auth()->guard('empleado')->user()->apellido }}</div></div></div>

    </header>
    <div class="linea-container">
        <div class="linea">
        </div>
    </div>
    <main class="container-middle">
        <div class="header-tabla">
<div class="id">ID</div>
<div class="nombre">NOMBRE</div>
<div class="apellido">APELLIDO</div>
 <div class="documento">DOCUMENTO</div>
 <div class="celular">ROL</div>
 <div class="direccion">CORREO</div>
        </div>
        @foreach ($empleados as $empleado )
            
      
        <div class="header-tabla-1">
        <div class="id">{{$empleado->id}}</div>
<div class="nombre">{{$empleado->name}}</div>
<div class="apellido">{{$empleado->apellido}}</div>
 <div class="documento">{{$empleado->documento}}</div>
 <div class="celular">{{$empleado->rol}}</div>
 <div class="direccion">{{$empleado->email}}</div>
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