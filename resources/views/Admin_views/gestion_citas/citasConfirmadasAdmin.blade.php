@extends("layouts.plantila_gestionCitas_admin")
@section("titulo")
Gestion de Citas
@endsection

@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('css/styleCitasCliente.css?v=1.14')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @include("Admin_views.gestion_citas.modal_info.info_cita_admin")
    <div class="cont3">
        <div class="cabecera-container">
            <div class="search-container"></div>
            <div class="put-title">CITAS CONFIRMADAS</div>
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
<div class="general-section">NOMBRE DUEÑO DE LA MASCOTA</div>
<div class="final-section">INFO</div>
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
<div class="general-section">{{$cita->Mascota->user->name}} {{$cita->Mascota->user->apellido}}</div>
<div class="final-section">
<a class="cancelar-button info-button" data-id="{{$cita->id}}"><i class="bi bi-info-circle-fill"></i></a>
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
var infoButtons = document.getElementsByClassName('info-button');
for (var i = 0; i < infoButtons.length; i++) {
    infoButtons[i].addEventListener('click', function(e) {
      e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
      var id = this.getAttribute('data-id'); // Obtener la ID almacenada en data-id
  
      // Mostrar una alerta con la ID correspondiente
      launcAlert.classList.add("ver")

      var lil=document.getElementById("recepcion");
      lil.value = id;
      if (id !== "") {
      
      var ruta = "{{ route('obtener-datos-cita-ajax','id') }}";
      ruta = ruta.replace('id', id);
      fetch(ruta)
          .then(response => response.json())
          .then(data => {
              document.getElementById('nombre-dueño').value = data.nombre_dueño;
              document.getElementById('apellido').value = data.apellido;
              document.getElementById('celular').value = data.celular;
              document.getElementById('direccion').value = data.direccion;
              document.getElementById('documento').value = data.documento;
              document.getElementById('email').value = data.email;
              document.getElementById('nombre_mascota').value = data.mascota_name;
              document.getElementById('raza_mascota').value = data.mascota_raza;
              document.getElementById('genero_mascota').value = data.mascota_genero;
              document.getElementById('color_mascota').value = data.mascota_color;
              document.getElementById('especie_mascota').value = data.mascota_especie;
              document.getElementById('edad_mascota').value = data.mascota_edad;
              document.getElementById('nacimiento_mascota').value = data.mascota_nacimiento;
              document.getElementById('fecha_cita').value = data.fecha_cita;
              document.getElementById('hora_cita').value = data.hora_cita;
              document.getElementById('servicio').value = data.servicio_cita;
              document.getElementById('estado_cita').value = data.estado_cita;
          })
          .catch(error => {
              console.error('Error:', error);
          });
  } else {
      document.getElementById('nombre-dueño').value = "";
      document.getElementById('apellido').value = "";
  };
    });
  }
    </script>
    
<script src="{{asset('js/gestion_citas_admin_script.js?v=1.14')}}"></script>
@endsection

@section("menuButtons")
<div class="dash">
          <a class="ins" href="{{route('citasPorConfirmar')}}"><p class="t1">Citas Por Confirmar</p></a>
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