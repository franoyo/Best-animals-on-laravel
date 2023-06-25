@extends("layouts.plantilla_right")
@section("putTitle")
Vista General Productos
@endsection
@section("menuButtons")
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
    <a class="ins" href="{{route('error400.admin')}}">
        <p class="t1">VENTAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('error400.admin')}}">
        <p class="t1">AGENDA</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('generalProductos')}}">
        <p class="t1">PRODUCTOS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('error400.admin')}}">
        <p class="t1">ESTADISTICAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('historiasClinicasFormulario')}}">
        <p class="t1">HISTORIAS CLINICAS</p>
    </a>
    <div class="linea"></div>
</div>
<div class="dash">
    <a class="ins" href="{{route('listaEmpleados')}}">
        <p class="t1">GESTION DE OPERARIOS</p>
    </a>
    <div class="linea"></div>
</div>
@endsection
@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('CSS/style6.css')}}">
<div class="cont3">
<div class="menumin">
 
  <nav class="modify-buttons">
    <input class="create" type="button" value="CREAR">
    <input class="search" type="button" value="BUSCAR">
  
    </nav>  

</div>
<div class="content_a"> <div class="row_a"> <div class="row_b"><div class="put_graphics"></div></div> <div class="row_b"><div class="put_graphics"></div></div></div>    
<div class="row_a">
<div class="put_graphics2">


</div>

</div> 
</div>

</div>
@endsection