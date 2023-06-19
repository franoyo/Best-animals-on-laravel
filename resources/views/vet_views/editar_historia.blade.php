@extends("layouts.plantilla_right")
@section("putTitle")
Formulario Historia Clinica
@endsection
@section("contenidoPrincipal")

<link rel="stylesheet" href="{{asset('css/style5.css?v=1.0')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<form class="cont3" action="{{route('updateHistoria.vet')}}" method="post">
  @csrf
  <div class="menumin">
    <nav class="modify-buttons">
    <input class="create" type="submit" value="EDITAR">
    <script>
      function redireccionar(){
window.location.href="{{route('listaHistorias.vet')}}";
      }
    </script>
    <input class="search" onclick="redireccionar()" type="button" value="BUSCAR">
    <input class="resetear" type="reset" value="RESETEAR">
    </nav>
  </div>
 
  <div class="subconter">
    <div class="contpertable">
      <header class="contform">
        <img class="photob" src="{{asset('img/best animal2-01 (1).png')}}"  alt="">
        <p class="title">CLINICA VETERINARIA <br>
          BEST ANIMALS <br>  historia clinica <br> DATOS DEL PACIENTE</p>
          

      </header>
<div class="conttable">
<div class="fom1">
<div class="zte">
  <input class="form-control output" name="nombre_mascota"  type="text" placeholder="NOMBRE:" value="{{$historia->nombre_mascota}}" required >
</div>
<div class="zte"><input class="form-control output" name="sexo_mascota" type="text" placeholder="SEXO:" value="{{$historia->sexo_mascota}}" required></div>
<div class="zte"><input class="form-control output" name="peso_mascota" type="text" placeholder="PESO:" value="{{$historia->peso_mascota}}" required ></div>

</div>
<div class="fom1">
  <div class="zte">
    <input class="form-control output" name="especie" type="text" placeholder="ESPECIE:" value="{{$historia->especie_mascota}}" required >
  </div>
  <div class="zte"><input class="form-control output" name="edad_mascota"  type="text" placeholder="EDAD:" value="{{$historia->edad_mascota}}" required ></div>
  <div class="zte"><input class="form-control output" name="esterilizado"  type="text" placeholder="ESTERILIZADO:" value="{{$historia->esterilizar_mascota}}" required></div>


</div>
<div class="fom1">
  <div class="zte"><input class="form-control output" name="raza" type="text" value="{{$historia->raza_mascota}}" placeholder="RAZA:"required > </div>
  <div class="zte"><input class="form-control output" name="color_mascota"  type="text" placeholder="COLOR:" value="{{$historia->color_mascota}}" required ></div>
  <div class="zte"><input class="form-control output" name="medicina_preventiva"  type="text" placeholder="MEDICINA PREVENTIVA:" value="{{$historia->medicina_preventiva}}" required ></div>

</div>

</div>
<header class="subti">
  <p class="dates ">Datos Del Dueño:</p>
</header>
<div class="tableaftersubti">
  <div class="fami"> <div class="zti"><input class="form-control put" name="nombre_owner" type="text" placeholder="NOMBRE:" value="{{$historia->nombre_dueño}}" required> </div>
  <div class="zti"><input class="form-control put" name="telefono" type="number" placeholder="TELEFONO:" value="{{$historia->telefono_dueño}}" required> </div>
  <div class="zti"><input class="form-control put" name="direccion" type="text" placeholder="DIRECCCION:" value="{{$historia->direccion_dueño}}" required></div>
</div>
 

</div>
<header class="subti2">
<p>Constantes Fisiologicas:</p>
</header>
<div class="contdobletable">
  <header class="conthead">
<div class="opa">
<p>Diagnostico <br> Presuntivo</p>
</div>
<div class="dir">

</div>
<div class="row1">
  <p>Diagnostico <br> Diferencial</p>
</div>
<div class="row2">
  <p>Diagnostico <br> Final</p>
</div>
  </header>
<div class="registros">
  <div class="mn1">
    <div class="fc">
<div class="fi"><div class="mg">FC:</div></div>
<div class="fu"><input class="tex" name="fc" type="text" value="{{$historia->fc}}" required></div>
    </div>
    <div class="fc">
      <div class="fi"><div class="mg">FR:</div></div>
      <div class="fu"><input class="tex" name="fr" type="text" value="{{$historia->fr}}" required></div>

    </div>
    <div class="fc">
      <div class="fi"><div class="mg">TEMPERATURA:</div></div>
      <div class="fu"><input class="tex" name="temperatura" type="text" value="{{$historia->temperatura}}" required ></div>


    </div>
    <div class="fc">
      <div class="fi"><div class="mg">LLENADO CAPILAR:</div></div>
      <div class="fu"><input class="tex" name="llenado_capilar" type="text" value="{{$historia->llenado_capilar}}" required ></div>

    </div>
    <div class="fc">
      <div class="fi"><div class="mg">PULSO:</div></div>
      <div class="fu"><input class="tex" name="pulso" type="text" value="{{$historia->pulso}}" required ></div>


    </div>
  
  </div>
  <div class="mn2"><p class="ana">ANAMNESIS</p></div>
  <div class="mn3"> <textarea class="form-control ugu" name="diagnostico_diferencial" id="" cols="5" rows="5" placeholder="INGRESE AQUI SU TEXTO:">{{$historia->diagnostico_diferencial}}</textarea></div>
  <div class="mn4"><textarea class="form-control ugu" name="diagnostico_final" id="" cols="5" rows="5" placeholder="INGRESE AQUI SU TEXTO:">{{$historia->diagnostico_final}}</textarea> </div>
</div>
</div>

<div class="contlast">
  <div class="first">
    <div class="pruebascontainer"><header class="laboratorio"><p>Test De Laboratorio:</p></header>
      <textarea class="form-control caja" name="pruebas_de_laboratorio" id="" cols="5" rows="5">{{$historia->test_laboratorio}}</textarea></div>
    
  </div>
  <div class="second"> <div class="tratamiento"><header class="tara"><p>TRATAMIENTO:</p></header>
  <textarea class="form-control loop" name="tratamiento" id="" cols="5" rows="5">{{$historia->tratamiento}}</textarea></div></div>
  <div class="fecha"><div class="historia"> <div class="nm"><div class="hist"><p>No.Historia:</p></div> <div class="ponernum">
  {{$historia->id}}
  <input name="id" type="text" hidden value="{{$historia->id}}">
</div></div></div> </div>                                     </div>


</div>
    </div>
  


</div>
</form>
@endsection