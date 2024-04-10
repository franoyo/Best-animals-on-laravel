@extends("layouts.plantilla_right")

@section("putTitle")
Dashboard Veterinario
@endsection

@section("menuButtons")
<div class="dash">
          <a class="ins" href="{{route('historiasClinicasFormulario.vet')}}"><p class="t1">HISTORIAS CLINICAS</p></a>
          <div class="linea"></div>
        </div>
@endsection
@section("contenidoPrincipal")
<style>
.prin{
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  text-align: center;
  font-size: 4vw;
  background-color:#F6F6F6;
}

</style>
<div class="prin" >
<div class="welcome" >
                          <p>BIENVENIDO!</p>
                      </div>
                      <div class="administrador">
                          <p class="auth">{{ auth()->guard('empleado')->user()->name }} {{ auth()->guard('empleado')->user()->apellido }}</p>Es un gusto tenerte de vuelta!
                      </div>
                      <div class="cont-image">
                          <div class="put-gift">
                              <img class="mish" src="img/gato-imagen-animada-0301.gif" alt="gift">
                          </div>
                      </div>
                      </div>
@endsection