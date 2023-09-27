@extends("layouts.plantillaRow")
@section("contenidoPrincipal")
@include("alerts.eliminar_historia")
<link rel="stylesheet" href="{{asset('css/style28.css?v=1.15')}}">
<a class="new-acta" href="{{route('historiasClinicasFormulario')}}">
  <i class="bi bi-plus-lg"></i>
  </a>
                <div class="put-title">
                   <div class="container-buscador">
<form class="put-search" action="{{route('buscarHistoria')}}" method="get">
    <input type="search" name="buscar" class="buscador" placeholder="Buscador:">
</form>
                   </div>
                   <div class="titulo">
<h2>HISTORIAS CLINICAS</h2>
                   </div>
                   <div class="put-button">
                   <nav class="botones-container">
                    <a class="boton-reporte" href="{{route('historiasExcel')}}">EXCEL</a>
                    <a class="boton-reporte" href="{{route('reporteHistorias')}}">PDF</a>
                    <a class="boton-reporte" href="{{route('usuariosExcel')}}">SVG</a>
                    </nav>
                   </div>
                   
                </div>
                <div class="container-table">
                    <div class="tabla">
<div class="row-title">
    <div class="put-id">ID</div>
    <div class="name-mascota">NOMBRE DE LA MASCOTA</div>
    <div class="name-mascota">PESO DE LA MASCOTA</div>
    <div class="name-dueño">NOMBRE DEL DUEÑO</div>
    <div class="name-dueño">TELEFONO</div>
    <div class="name-dueño">DIRECCION</div>
    <div class="botones">VER</div>
    <div class="botones">EDITAR</div>
    <div class="botones-1">ELIMINAR</div>
</div>
@foreach ($historia as $historias)
    

  <div class="row-info">
    <div class="put-id">{{$historias->id}} </div>
    <div class="name-mascota">{{$historias->nombre_mascota}} </div>
    <div class="name-mascota">{{$historias->peso_mascota}} </div>
    <div class="name-dueño">{{$historias->nombre_dueño}} </div>
    <div class="name-dueño">{{$historias->telefono_dueño}}</div>
    <div class="name-dueño">{{$historias->direccion_dueño}}</div>
    <div class="botones"><a class="put-icon" href="{{route('verHistoria', ['id' => $historias->id])}}"><i class="bi bi-eye"></i></a></div>
    <div class="botones"><a class="put-icon" href="{{route('editarHistoria', ['id' => $historias->id])}}"><i class="bi bi-pen-fill"></i></a></div>
    <div class="botones-1">
        <a class="put-icon delete-button" data-id="{{$historias->id}}"><i class="bi bi-journal-x"></i></a>
    </div>

</div>
@endforeach
                    </div>
                    <div class="container-move-buttons">
                      
                    </div>
                </div>
                
           <script src="{{asset('js/crud_productos_script.js')}}"></script>
@endsection