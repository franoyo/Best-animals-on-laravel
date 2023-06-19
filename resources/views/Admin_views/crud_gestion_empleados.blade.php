@extends("layouts.plantillaRow")
@section("titulo")
Gestion De Empleados
@endsection

@section("contenidoPrincipal")
@include('alerts.eliminar_empleado')
@include("Admin_views.modals_registro.registrar_empleado")
<link rel="stylesheet" href="{{asset('css/style21.css?V=1.11')}}">


                <div class="insert-title">
                <div class="container-buscador">
<form class="put-search" method="get" action="buscador_crud_gestion_usuario.php">
    <input type="search" name="buscar" class="buscador" placeholder="Buscador:">
</form>
                   </div>
                   <div class="titulo">
<h2>GESTION EMPLEADOS</h2>
                   </div>
                   <div class="insert-botones">
                   <a class="boton-reporte" href="{{route('reporteEmpleados')}}">GENERAR REPORTE</a>
                   </div>
                    </div>  
                    <div class="container-tabla">
                      <button class="crear" id="create"><i class="bi bi-plus"></i></button>
                      
                    <div class="tabla" id="tabla">
<div class="row-subtitle">
<div class="put-id">ID</div>
<div class="name-dueño">NOMBRE</div>
<div class="apellido-dueño">APELLIDOS</div>

<div class="apellido-dueño">CELULAR</div>
<div class="apellido-dueño">EMAIL</div>

<div class="apellido-dueño">ROL</div>

<div class="subtitle">VER</div>
<div class="subtitle">EDITAR</div>
<div class="subtitle-1">BORRAR</div>
</div>
@foreach ($empleado as $empleados)
  @include("Admin_views.modals_registro.ver_empleado")
@include("Admin_views.modals_registro.editar_empleado")
  <div class="row-empleados">
    <div class="put-id" id="id_empleado">{{$empleados->id}}</div>
    <div class="name-dueño">{{$empleados->name}}</div>
    <div class="apellido-dueño">{{$empleados->apellido}}</div>           
    <div class="apellido-dueño">{{$empleados->celular}}</div>
    <div id="email_empleado">{{$empleados->email}}</div>
    <div style="text-transform: uppercase;" class="apellido-dueño">{{$empleados->rol}}
    </div>
<div class="subtitle"><a class="edit-button ver-empleado" data-id="{{$empleados->id}}" ><i class="bi bi-eye"></i></a></div>

    <div class="subtitle"><a id="pelo" class="edit-button update-button" data-id="{{$empleados->id}}"><i class="bi bi-pencil-square"></i></a></div>
    <div class="subtitle-1">  <a class="edit-button delete-button"  data-id="{{$empleados->id}}">
    <i class="bi bi-person-x"></i>
  </a></div>
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
                    
                    </div>
                 <script src="{{asset('js/script_gestion_usuario.js?v=1.16')}}"></script>
               
@endsection

@section("menuButtons")
<div class="dash">
          <a class="ins" href="{{route('listaClientes')}}"><p class="t1">GESTION USUARIO</p></a>
          <div class="linea"></div>
        </div>
@endsection