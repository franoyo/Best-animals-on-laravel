@extends("layouts.plantilla_cliente")
@section("putTitle")
Gestion de citas
@endsection
@section("menuButtons")
<div class="dash">
                <a class="ins" href="{{route('CitasConfirmadas')}}"><p class="t1">Citas Confirmadas</p></a>
                <div class="linea"></div>
              </div>
              <div class="dash">
                <a class="ins" href="{{route('CitasCanceladas')}}"><p class="t1">Mis citas canceladas</p></a>
                <div class="linea"></div>
              </div>
              <div class="dash">
                <a class="ins" href="{{route('mascotas.cliente')}}"><p class="t1">ATRAS</p></a>
                <div class="linea"></div>
              </div>
@endsection

@section("contenidoPrincipal")
@include("Admin_views.gestion_citas.modal_info.reagendar_cita")
@include("alerts.eliminar_cita_confirmada")
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
<div class="semifinal-section">REAGENDAR CITA</div>
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
<a class="cancelar-button edit-button" data-id="{{$cita->id}}">Reagendar</a>
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
    <script>
//cambiar inputs en tiempo real
var infoButtons = document.getElementsByClassName('edit-button');
const reagendarModal=document.getElementById("reagendar-modal")
for (var i = 0; i < infoButtons.length; i++) {
    infoButtons[i].addEventListener('click', function(e) {
      e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
      var id = this.getAttribute('data-id'); // Obtener la ID almacenada en data-id
  
      // Mostrar una alerta con la ID correspondiente
      reagendarModal.classList.add("seeDa")

      var get=document.getElementById("receptacion");
      get.value = id;
      if (id !== "") {
      
      var ruta = "{{ route('get-datos','id') }}";
      ruta = ruta.replace('id', id);
      fetch(ruta)
          .then(response => response.json())
          .then(data => {

              document.getElementById('fecha').value = data.fecha_cita;
              document.getElementById('hora').value = data.hora_cita;
              document.getElementById('select-service').value = data.servicio_cita;
              document.getElementById('select-service').innerText ="Su servicio actual es:"+data.servicio_name;

          })
          .catch(error => {
              console.error('Error:', error);
          });
  }
    });
  }
    </script>
    <script src="{{asset('js/gestion_citas_script.js?v=1.11')}}"></script>
@endsection