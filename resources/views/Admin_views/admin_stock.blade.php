<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style14.css?=1.61">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Admin_stock</title>
</head>
<body>
@if(session('success'))
      @include('alerts.alert_datos_ingresados_correctamente')
    <script>
      const alert=document.getElementById("alert-disponible")
      setTimeout(() => {
        alert.classList.add("ocultar")
      }, 350);
      setTimeout(() => {
        alert.classList.remove("ocultar")
      }, 2200);
    </script>
@endif
    <div class="maincontainer">
    
        <div class="cont1">
        <header class="logo">
          <img class="best" src="img/best animal2-01 (1).png" alt="main">
        
        
        
        </header>
        <div class="dash">
          <a class="ins" href="{{route('caja')}}"><p class="t1">CAJA</p></a>
          <div class="linea"></div>
        
        
        
        </div>
        
        <div class="dash">
        <a class="ins" href="{{route('registroStock')}}"><p class="t1">STOCK</p></a>
        <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">VENTAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">AGENDA</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="dashaboard_admin_productos.html"><p class="t1">PRODUCTOS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">ESTADISTICAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="dashboard historias clinicas admin.html"><p class="t1">HISTORIAS CLINICAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">GESTION DE OPERARIOS</p> </a>
         
          <div class="linea"></div>
        </div>
        </div>
        <div class="cont2">
            <header class="subuser">
                <div class="mitad" >     <nav>
                  <a href=""><img class="user" src="img/buttton.png" alt=""></a>
                  
                      </nav> 
                      <p class="admn">{{Auth::user()->name }} {{Auth::user()->apellido }}</p>                </div>
                
                
               
            
            <div class="mitad2">
            <a class="button" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">SALIR</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
            
            
            </div>
            </header>
            <div class="cont3">
              <form class="cont3" enctype="multipart/form-data" action="{{route('storeStock')}}" method="post">
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
  
  <header class="title_form"><div class="logo"><img class="logoz" src="img/best animal2-01 (1).png" alt="logo"></div><p class="titulo_central">INGRESO DE PRODUCTO <br> STOCK</p> </header>
  <div class="example_1">
 
  <div class="sub_form_class"><p class="tex_gen">DESCRIPCION</p></div>
  <div class="container_formulario"><input class="formz" name="descripcion_producto" id="descripcion_producto" type="text" placeholder="Ingrese texto" required ></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">CODIGO</p></div>
      <div id="captar" class="container_formulario2">{{ $captar }}
      </div>
  
      <div class="container_formulario3"><p class="excrit">STOCK</p></div>
      <div class="container_formulario4"><input class="formz" name="stock_producto" type="text" placeholder="Ingrese texto" required ></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">MARCA</p></div>
      <div class="container_formulario2"><input class="formz" name="marca_producto" type="text" placeholder="Ingrese  texto" required></div>
      <div class="container_formulario3"><p class="excrit">PRECIO</p></div>
      <div class="container_formulario4"><input class="formz" name="precio_producto" type="number" step="any" placeholder="Ingrese  texto" required></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">PESO</p></div>
      <div class="container_formulario2"><input class="formz" name="peso_producto" type="number" step="any"  placeholder="Ingrese  texto" required></div>
      <div class="container_formulario3"><p class="excrit">UBICACION</p></div>
      <div class="container_formulario4"><input class="formz" name="ubicacion_producto" type="text" placeholder="Ingrese texto" required></div>
  </div>
  <div class="example_1">
      <div class="sub_form_class"><p class="tex_gen">FECHA DE VENCIMIENTO</p></div>
      <div class="container_formulario"><input class="formz" name="fecha_vencimiento_producto" type="date" placeholder="Ingrese texto" required ></div>
  </div>
      <footer class="container_final_buttons">
     
  <div class="middle_butons"><div class="dentro_buttons"><input class="votones" type="button" value="actualizar" onclick="porQueMedaperezaCambiarloPorUnAxd()"> <input class="votones" type="submit" id="registrar" name="registrar" value="registrar"></div><div class="end_b"><div class="num_orden">No. <div class="insertar_numero">{{ $captar }}</div></div><label class="create-upload" for="suv-image"><input class="bad-input" type="file" name="imagen_producto" id="suv-image" accept=".png, .jpg, .jpeg" required><i class="bi bi-card-image"></i></label><label class="text-label" for="suv-image">IMAGEN PRODUCTO</label></div></div>


  
      </footer>
  </div>
</form>

        
        

<script>
        function porQueMedaperezaCambiarloPorUnAxd(){
          window.location.href="{{route('listaProductos')}}"
        }
      </script>
</body>
</html>

