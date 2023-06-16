<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf maquetacion</title>
    <link rel="stylesheet" href="{{asset('css/stylePDFClientes.css?v=1.0')}}">
</head>
<body>
    <header class="container-header">
<div class="put-logo">
    <img class="imagen" src="best animal2-01 (1).png" alt="">
</div>
<div class="put-titulo">REPORTE DE CLIENTES</div>
<div class="put-logo"></div>

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
 <div class="direccion">DIRECCION</div>
        </div>
        @foreach ($clientes as $cliente )
            
      
        <div class="header-tabla">
        <div class="id">{{$cliente->id}}</div>
<div class="nombre">{{$cliente->name}}</div>
<div class="apellido">{{$cliente->apellido}}</div>
 <div class="documento">{{$cliente->documento}}</div>
 <div class="celular">{{$cliente->celular}}</div>
 <div class="direccion">{{$cliente->direccion}}</div>
        </div>
        @endforeach
    </main>
</body>
</html>