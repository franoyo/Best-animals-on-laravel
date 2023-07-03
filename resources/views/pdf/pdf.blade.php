<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Clientes {{$fecha}}</title>
    <link rel="stylesheet" href="{{asset('css/stylePDFClientes.css?v=1.32')}}">
</head>
<body>
   
    <header class="container-header">
<div class="put-logo">
    <img class="imagen" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
</div>
<div class="put-titulo">REPORTE DE CLIENTES</div>
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
 <div class="celular">CELULAR</div>
 <div class="direccion">CORREO</div>
        </div>
        @foreach ($clientes as $cliente )
            
      
        <div class="header-tabla-1">
        <div class="id">{{$cliente->id}}</div>
<div class="nombre">{{$cliente->name}}</div>
<div class="apellido">{{$cliente->apellido}}</div>
 <div class="documento">{{$cliente->documento}}</div>
 <div class="celular">{{$cliente->celular}}</div>
 <div class="direccion">{{$cliente->email}}</div>
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