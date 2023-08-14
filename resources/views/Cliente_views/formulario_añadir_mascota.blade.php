@extends("layouts.plantilla_cliente")
@section("menuButtons")
<div class="dash">
                <a class="ins" href="{{route('mascotas.cliente')}}"><p class="t1">MIS MASCOTAS</p></a>
                <div class="linea"></div>
              </div>
              <div class="dash">
                <a class="ins" href="{{route('mascotas.cliente')}}"><p class="t1">ATRAS</p></a>
                <div class="linea"></div>
              </div>
@endsection

@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('css/formMascota.css')}}">
<div class="cont3">
<div class="container-form">
<form class="formulario" method="post" action="{{route('almacenarMascota.cliente')}}">
    @csrf
<div class="container-encabezado">
    <div class="put-logo">
        <img class="img" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
    </div>
    <div class="put-title">
        AÑADIR MASCOTA
    </div>
    <div class="put-logo"></div>
</div>
<main class="container-campos">
<div class="mitad">
    <div class="container-subtitulito">
        <div class="put-sub">NOMBRE</div>
        <div class="put-sub">GENERO</div>
        <div class="put-sub">ESPECIE</div>
    </div>
    <div class="container-input">
<div class="put-input"><div class="inputsito"><input name="nombre" class="inp" type="text"></div></div>
<div class="put-input"><div class="inputsito"><select class="inp" name="genero">
<option value="Macho">Macho</option>
<option value="Hembra">Hembra</option>
<option value="Otro">Otro</option>

        </select></div></div>  
<div class="put-input"><div class="inputsito"><input name="especie" class="inp" type="text"></div></div> 
    </div>
</div>
<div class="mitad">
<div class="container-subtitulito">
<div class="put-sub">RAZA</div>
<div class="put-sub">COLOR</div>
<div class="put-sub">FECHA DE NACIMIENTO</div>
</div>
<div class="container-input">
<div class="put-input"><div class="inputsito"><input name="raza" class="inp" type="text"></div></div>
<div class="put-input"><div class="inputsito"><input name="color" class="inp" type="text"></div></div>  
<div class="put-input"><div class="inputsito"><input name="fecha_nacimiento" class="inp" max="{{$fecha}}" type="date"></div></div> 
</div>
</div>

</main>
<footer class="wrong-footer">
    <input class="btn" type="submit" value="AÑADIR">
</footer>
</form>
</div>

</div>


@endsection
