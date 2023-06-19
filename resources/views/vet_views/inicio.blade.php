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