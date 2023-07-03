@extends("layouts.plantilla_cliente")

@section("menuButtons")
<div class="dash">
                <a class="ins" href="{{route('añadirMascota.cliente')}}"><p class="t1">AÑADIR MASCOTA</p></a>
                <div class="linea"></div>
              </div>

@endsection
@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('css/crudMascota.css?v=1.0')}}">
<div class="cont3">
<div class="container-titulo">
<div class="section"></div>
<div class="titulo">MIS MASCOTAS</div>
<div class="section"></div>
</div>
<main class="container-tabla">
<div class="tabla">
<div class="row-subtitle">
    <div class="id">ID</div>
    <div class="campos">NOMBRE</div>
    <div class="campos">GENERO</div>
    <div class="campos">ESPECIE</div>
    <div class="campos">RAZA</div>
    <div class="campos">EDAD</div>
    <div class="campos">FECHA DE NACIMIENTO</div>
    <div class="bc">EDITAR</div>
    <div class="bc">ELIMINAR</div>
    

</div>
@for ($i=1;$i<=20;$i++)
<div class="row-content">
    <div class="id"></div>
    <div class="campos"></div>
    <div class="campos">MAMAHUEVO</div>
    <div class="campos"></div>
    <div class="campos"></div>
    <div class="campos"></div>
    <div class="campos"></div>
    <div class="bc"></div>
    <div class="bc"></div>
    

</div>
@endfor


</div>
<div class="move-buttons"></div>

</main>
</div>
@endsection