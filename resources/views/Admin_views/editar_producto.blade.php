@extends("layouts.plantilla_right")
@section("contenidoPrincipal")
<link rel="stylesheet" href="{{asset('css/style71.css?v=1.0')}}">
<form class="cont3" enctype="multipart/form-data" action="{{route('updateProducto')}}" method="post">
              @csrf
              <div class="menumin">
                <nav class="modify-buttons">
                    <nav class="modify-buttons">
                        <input class="create" type="button" value="STOCK">
                        <input class="search" type="button" value="MARCA">
                        <input class="categoria" type="button" value="CATEGORIA">
                        <input class="vencimiento" type="button" value="VENCIMIENTO">
                        </nav>  
                    
                </nav>
              </div>
              <div class="container_form_external">
                
  <div class="container_form_internal">
  
  <header class="title_form"><div class="logo"><img class="logoz" src="{{asset('img/best animal2-01 (1).png')}}" alt="logo"></div><p class="titulo_central">INGRESO DE PRODUCTO <br> STOCK</p> </header>
  <div class="example_1">
 
  <div class="sub_form_class"><p class="tex_gen">DESCRIPCION</p></div>
  <div class="container_formulario"><input class="formz" name="descripcion_producto" id="descripcion_producto" type="text" placeholder="Ingrese texto" value="{{$producto->descripcion}}" required ></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">CODIGO</p></div>
      <div id="captar" class="container_formulario2">{{$producto->id}}
        <input name="id" type="number" value="{{$producto->id}}" hidden>
      </div>
  
      <div class="container_formulario3"><p class="excrit">STOCK</p></div>
      <div class="container_formulario4"><input class="formz" name="stock_producto" min="1" max="500" type="number" value="{{$producto->stock}}" placeholder="Ingrese texto" required ></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">MARCA</p></div>
      <div class="container_formulario2"><input class="formz" name="marca_producto" type="text" value="{{$producto->marca}}" placeholder="Ingrese  texto" required></div>
      <div class="container_formulario3"><p class="excrit">PRECIO</p></div>
      <div class="container_formulario4"><input class="formz" name="precio_producto" max="1.000.000" type="text" pattern="^[1-9][0-9]*(\.\d+)?$" step="any" value="{{$producto->precio}}" placeholder="Ingrese  texto" required></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">PESO</p></div>
      <div class="container_formulario2"><input class="formz" name="peso_producto" type="number" step="any" value="{{$producto->peso}}"  placeholder="Ingrese  texto" required></div>
      <div class="container_formulario3"><p class="excrit">UBICACION</p></div>
      <div class="container_formulario4"><input class="formz" name="ubicacion_producto" type="text" value="{{$producto->ubicacion}}" placeholder="Ingrese texto" required></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">FECHA DE VENCIMIENTO</p></div>
      <div class="container_formulario"><input class="formz" name="fecha_vencimiento_producto" type="date" value="{{$producto->vencimiento}}" placeholder="Ingrese texto" required ></div>
  </div>
      <footer class="container_final_buttons">
     
  <div class="middle_butons"><div class="dentro_buttons"><input class="votones" type="button" value="actualizar" onclick="porQueMedaperezaCambiarloPorUnAxd()"> <input class="votones" type="submit" id="registrar" name="registrar" value="registrar"></div><div class="end_b"><div class="num_orden">No. <div class="insertar_numero"></div></div><label class="create-upload" for="suv-image"><input class="bad-input" type="file" name="imagen_producto" id="suv-image" accept=".png, .jpg, .jpeg" ><i class="bi bi-card-image"></i></label><label class="text-label" for="suv-image">IMAGEN PRODUCTO</label></div></div>

      </footer>
  </div>
</form>
<script>
        function porQueMedaperezaCambiarloPorUnAxd(){
          window.location.href="{{route('listaProductos')}}"
        }
      </script>
@endsection