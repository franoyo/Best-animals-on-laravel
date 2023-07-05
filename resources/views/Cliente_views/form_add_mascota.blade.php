@extends("layouts.plantilla_cliente")

@section("menuButtons")

<div class="dash">
                <a class="ins" href="{{route('añadirMascota.cliente')}}"><p class="t1">AÑADIR MASCOTA</p></a>
                <div class="linea"></div>
              </div>

@endsection
@section("contenidoPrincipal")

<link rel="stylesheet" href="{{asset('css/crudMascota.css?v=1.1')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
@foreach ($mascotas as $mascota)
@include("Cliente_views.modals_cliente.modal_editar_mascota")
<div class="row-content">
    <div class="id">{{$mascota->id}}</div>
    <div class="campos">{{$mascota->nombre}}</div>
    <div class="campos">{{$mascota->genero}}</div>
    <div class="campos">{{$mascota->especie}}</div>
    <div class="campos">{{$mascota->raza}}</div>
    <div class="campos">{{$mascota->edad}}</div>
    <div class="campos">{{$mascota->fecha_nacimiento}}</div>
    <div class="bc"><a class="btn-edits update-button" href="#" data-id="{{$mascota->id}}"><i class="bi bi-pen"></i></a></div>
    <div class="bc"><a class="btn-edits" href="#" data-id="{{$mascota->id}}"><i class="bi bi-trash3"></i></a></div>
    

</div>
@endforeach

</div>
<div class="move-buttons"></div>

</main>
</div>
<script src="{{asset('js/script_crud_mascotas.js')}}"></script>
@endsection