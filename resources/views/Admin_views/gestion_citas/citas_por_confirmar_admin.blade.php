@extends("layouts.plantila_gestionCitas_admin")
@section("titulo")
Gestion de Citas
@endsection

@section("contenidoPrincipal")
@include("alerts.confirmar_cita")
@include("alerts.cancelarCitaEmpleado")

    <link rel="stylesheet" href="{{asset('css/styleCitaPorConfirmar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="cont3">
        <div class="cabecera-container">
            <div class="search-container"></div>
            <div class="put-title">CITAS POR CONFIRMAR</div>
            <div class="search-container"></div>
        </div>
        <div class="tabla-container">
            <div class="tabla">
<div class="row-subtitle">
<div class="id-section">NO</div>
<div class="general-section">NOMBRE MASCOTA</div>
<div class="general-section">HORA DE LA CITA</div>
<div class="general-section">FECHA DE LA CITA</div>
<div class="general-section">SERVICIO</div>
<div class="general-section">ESTADO DE LA CITA</div>
<div class="semifinal-section">CONFIRMAR CITA</div>
<div class="final-section">CANCELAR CITA</div>
</div>
@foreach ($citas as $cita)
<div class="row-content">
<div class="id-section">{{$cita->id}}</div>
<div class="general-section">{{$cita->nombre_mascota_real}}</div>
<div class="general-section">{{$cita->hora_cita}}</div>
<div class="general-section">{{$cita->fecha_cita}}</div>
<div class="general-section">
@if ($cita->servicio_id==1)
  spa 
@elseif ($cita->servicio_id==2)
consulta medica
@elseif ($cita->servicio_id==3)
vacunacion y desparacitacion
@elseif ($cita->servicio_id==4)
cirujia y hospital
@elseif ($cita->servicio_id==5)
profilaxis
@elseif ($cita->servicio_id==6)
certificado de viaje
@elseif ($cita->servicio_id==7)
guarderia de mascotas
@endif  
</div>
<div class="general-section">POR CONFIRMAR</div>
<div class="semifinal-section">
<a class="cancelar-button acept-button" data-id="{{$cita->id}}">CONFIRMAR</a>
</div>
<div class="final-section">
<a class="cancelar-button delete-button" data-id="{{$cita->id}}">Cancelar</a>
</div>

</div>
@endforeach

            </div>
            <div class="move-buttons">
                <div class="contenedor-de-botones">
                    <div class="put-button"><i class="bi bi-chevron-left"></i></div>
                    <div class="put-button"><i class="bi bi-chevron-double-left"></i></div>
                </div>
                <div class="contenedor-de-botones">
                    <div class="put-button"><i class="bi bi-chevron-double-right"></i></div>
                    <div class="put-button"><i class="bi bi-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    
<script src="{{asset('js/gestion_citas_script.js?V=1.13')}}"></script>
               
@endsection

@section("menuButtons")
<div class="dash">
          <a class="ins" href="{{route('citasConfirmadas')}}"><p class="t1">Citas Confirmadas</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="{{route('listaClientes')}}"><p class="t1">Citas Canceladas</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="{{route('listaClientes')}}"><p class="t1">Historial De Citas</p></a>
          <div class="linea"></div>
        </div>
@endsection