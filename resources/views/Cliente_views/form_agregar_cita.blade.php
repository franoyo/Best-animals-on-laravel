@extends("layouts.plantilla_cliente")
@section("menuButtons")
<div class="dash">
                <a class="ins" href="{{route('dashboard')}}"><p class="t1">MIS CITAS</p></a>
                <div class="linea"></div>
              </div>
              <div class="dash">
                <a class="ins" href="{{route('dashboard')}}"><p class="t1">ATRAS</p></a>
                <div class="linea"></div>
              </div>
@endsection
@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('css/form_agregar_mascota.css?v=1.11')}}">
<div class="container-form">
<form class="form-layout" action="{{route('almacenarCita.cliente')}}" method="post">
    @csrf
<header class="cabecera-form">
    <div class="put-logo">
        <img class="logo" src="{{asset('img/best animal2-01 (1).png')}}" alt="logo">
    </div>
    <div class="title">
        AGENDAR CITA
    </div>
    <div class="put-logo"></div>
</header>
<div class="subtitle">
    DATOS DEL DUEÑO:
</div>
<div class="container-input-dueño">
<div class="sub-title">
   <div class="space">NOMBRE</div>
   <div class="space">APELLIDO</div>
   <div class="space">CELULAR</div>
</div>
<div class="put-inputs">
    <input class="inpt" type="text" name="nombre" value="{{ Auth::user()->name }}" readonly>
    <input class="inpt" type="text" name="apellido" value="{{ Auth::user()->apellido }}" readonly>
    <input class="inpt" type="text" name="celular" value="{{ Auth::user()->celular }}" readonly>
</div>
<div class="sub-title">
    <div class="space">DIRECCION</div>
    <div class="space">DOCUMENTO</div>
    <div class="space">EMAIL</div>
 </div>
 <div class="put-inputs">
    <input class="inpt" type="text" name="direccion" value="{{ Auth::user()->direccion }}" readonly>
    <input class="inpt" type="text" name="documento" value="{{ Auth::user()->documento }}" readonly>
    <input class="inpt" type="text" name="email" value="{{ Auth::user()->email }}" readonly>
</div>


</div>
<div class="subtitle">
    DATOS DE LA MASCOTA:
</div>
<div class="container-input-dueño">
    <div class="sub-title">
       <div class="space">NOMBRE</div>
       <div class="space">RAZA</div>
       <div class="space">GENERO</div>
    </div>
    <div class="put-inputs">
        <select name="nombre_mascota_id" class="inpt" id="nombre_mascota">
        <option value="" selected>SELECCIONE SU MASCOTA</option>
            @foreach ($mascotas as $mascota )
            <option value="{{$mascota->id}}">{{$mascota->nombre}}</option>
            @endforeach
        </select>
        <input class="inpt" type="text" id="raza" name="raza" readonly>
        <input class="inpt" type="text" id="genero" name="genero" readonly>
        <input class="inpt" type="text" id="nombre_mascota_real" name="nombre_mascota_real" hidden>
    </div>
    <div class="sub-title">
        <div class="space">COLOR</div>
        <div class="space">ESPECIE</div>
        <div class="space">FECHA DE NACIMIENTO</div>
     </div>
     <div class="put-inputs">
        <input class="inpt" type="text" id="color" name="color" readonly>
        <input class="inpt" type="text" id="especie" name="especie" readonly>
        <input class="inpt" type="text" id="fecha_nacimiento" name="fecha_nacimiento" readonly>
    </div>
    
    
    </div>
    <div class="subtitle">
        FECHA Y SERVICIO
    </div>
    <div class="container-service">
        <input class="inp" type="date" min="{{ now()->format('Y-m-d') }}">
        <input class="inp" type="time" min="09:00" max="20:00">
        <select class="inp" name="servicio" id="" >
            <option value="" selected>SELECCIONE EL SERVICIO</option>
          
        </select>
    </div>
    <div class="buttons-container">
       <input class="btn" type="button" onclick="redirjirAddMascota()" value="AÑADIR MASCOTA">
        <input class="btn" type="submit" value="AGENDAR CITA">
    </div>


</form>

    </div>
    <script>
//cambiar inputs en tiempo real
document.getElementById('nombre_mascota').addEventListener('change', function() {
    var id = this.value;
    if (id !== "") {
      
        var ruta = "{{ route('obtener-datos-mascota-ajax','id') }}";
        ruta = ruta.replace('id', id);
        fetch(ruta)
            .then(response => response.json())
            .then(data => {
                document.getElementById('raza').value = data.raza;
                document.getElementById('genero').value = data.genero;
                document.getElementById('color').value = data.color;
                document.getElementById('especie').value = data.especie;
                document.getElementById('fecha_nacimiento').value = data.fecha_nacimiento;
                document.getElementById('nombre_mascota_real').value = data.nombre_mascota_real;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    } else {
        // Limpiar campos si no se selecciona una mascota
        document.getElementById('raza').value = "";
        document.getElementById('genero').value = "";
        document.getElementById('color').value = "";
        document.getElementById('especie').value = "";
        document.getElementById('fecha_nacimiento').value = "";
        document.getElementById('nombre_mascota_real').value ="";
    }
});
    </script>

    <script>  var urlAñadirMascota = "{{ route('añadirMascota.cliente') }}"

    ;</script>
    <script src="{{asset('js/form_cita_script.js?v=1.23')}}"></script>
@endsection