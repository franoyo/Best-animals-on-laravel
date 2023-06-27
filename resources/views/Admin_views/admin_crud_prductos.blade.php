@extends("layouts.plantillaRow")
@section("contenidoPrincipal")
@include("alerts.alert_eliminar")
<link rel="stylesheet" href="{{asset('css/styleCrudProductos.css?v=1.18')}}">
<div class="titulo-container">
<div class="put-variants">
    <section class="put-input">
        <input class="search" type="search" placeholder="Busqueda por id:">
    </section>
    <section class="put-input"><input class="search" type="search" placeholder="Busqueda por precio:"></section>
    <section class="put-input"><input class="search" type="search" placeholder="Busqueda por marca"></section>
</div>
<div class="main-title"><h1>GESTION PRODUCTOS</h1></div>
<div class="put-variants">
<button id="boton-informe" onclick="redirect()">GENERAR INFORME</button>
<script>
    function redirect(){
window.location.href="{{route('reporteProductos')}}"
    }
</script>
</div>
</div>
<div class="container-content">
    <div class="tabla-container">
    <div class="row-title">
    <div class="put-id">ID</div>
    <div class="name-img">IMAGEN</div>
    <div class="name-mascota">DESCRIPCION</div>
    <div class="name-dueño">MARCA</div>
    <div class="name-dueño">STOCK</div>
    <div class="name-dueño">PRECIO</div>
    <div class="botones">VER</div>
    <div class="botones">EDITAR</div>
    <div class="botones-1">ELIMINAR</div>
</div>
@foreach ($Lista as $listas )
<div class="row-info">
    <div class="put-id">{{$listas->id}}</div>
    <div class="name-img"><img class="mage" src="{{asset($listas->imagen)}}" alt="alusive"></div>
    <div class="name-mascota">{{$listas->descripcion}}</div>
    <div class="name-dueño">{{$listas->marca}}</div>
    <div class="name-dueño">{{$listas->stock}}</div>
    <div class="name-dueño">{{$listas->precio}}</div>
    <div class="botones"><a class="put-icon" href="{{route('verProducto', ['id' => $listas->id])}}"><i class="bi bi-eye"></i></a></div>
    <div class="botones"><a class="put-icon" href="{{route('editarProducto', ['id' => $listas->id])}}"><i class="bi bi-pen-fill"></i></a></div>
    <div class="botones-1">
        <a class="put-icon delete-button" data-id="{{$listas->id}}"><i class="bi bi-journal-x"></i></a>
    </div>

</div>    
@endforeach
    </div>

    <div class="container-move-buttons">
 
                      <div class="content-buttons">
  <div class="division">
  <button class="arrow-button" id="izquierda"><i class="bi bi-chevron-left"></i></button>
  <button class="arrow-button" id="doblIzq"><i class="bi bi-chevron-double-left"></i></button>
  </div>
  <div class="division">
    <button class="arrow-button" id="dobleDerecha"><i class="bi bi-chevron-double-right"></i></button>
  <button class="arrow-button" id="simply-right"><i class="bi bi-chevron-right"></i></button>
  </div>
  
                      </div>
                      </div>
                      <a class="add-button" href="{{route('registroStock')}}"> <i class="bi bi-plus-lg"></i></a>
</div>
<script src="{{asset('js/crud_productos_script.js')}}"></script>


@endsection