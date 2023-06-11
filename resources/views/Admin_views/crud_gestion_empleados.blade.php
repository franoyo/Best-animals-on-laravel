@extends("layouts.plantillaRow")
@section("contenidoPrincipal")
@include("Admin_views.modals_registro.registrar_empleado")
<link rel="stylesheet" href="{{asset('css/style21.css')}}">

                <div class="insert-title">
                <div class="container-buscador">
<form class="put-search" method="get" action="buscador_crud_gestion_usuario.php">
    <input type="search" name="buscar" class="buscador" placeholder="Buscador:">
</form>
                   </div>
                   <div class="titulo">
<h2>GESTION EMPLEADOS</h2>
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

<div class="apellido-dueño">ROL ID</div>

<div class="subtitle">VER</div>
<div class="subtitle">EDITAR</div>
<div class="subtitle-1">BORRAR</div>
</div>
  <div class="row-empleados">
    <div class="put-id" id="id_empleado"></div>
    <div class="name-dueño"></div>
    <div class="apellido-dueño"></div>
    
    <div class="apellido-dueño"></div>
   
    <div id="email_empleado"></div>
    
    <div class="apellido-dueño">

    </div>

<div class="subtitle"><a class="edit-button" href=""><i class="bi bi-eye"></i></a></div>
    <div class="subtitle"><a id="pelo" class="edit-button" href=""  ><i class="bi bi-pencil-square"></i></a></div>
    <div class="subtitle-1">  <a class="edit-button" href="">
    <i class="bi bi-person-x"></i>
  </a></div>
 
   
</div>
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
                 <script src="{{asset('js/script_gestion_usuario.js')}}"></script>
@endsection