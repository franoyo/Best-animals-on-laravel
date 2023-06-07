@extends("layouts.plantilla")
@section("botones-menu")
<div class="dash">
    <a class="ins" href="{{route('caja')}}">
        <p class="t1">CAJA</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('registroStock')}}">
        <p class="t1">STOCK</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">VENTAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">AGENDA</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">PRODUCTOS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">ESTADISTICAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">HISTORIAS CLINICAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="dashboar_caja_registro.php">
        <p class="t1">GESTION DE OPERARIOS</p>
    </a>
    <div class="linea"></div>
</div>
@endsection
@section("mainContent")
<div class="welcome">
                          <p>BIENVENIDO!</p>
                      </div>
                      <div class="administrador">
                          <p class="auth">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</p>Es un gusto tenerte de vuelta!
                      </div>
                      <div class="cont-image">
                          <div class="put-gift">
                              <img class="mish" src="img/gato-imagen-animada-0301.gif" alt="gift">
                          </div>
                      </div>
@endsection