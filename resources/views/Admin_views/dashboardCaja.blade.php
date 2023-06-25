
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style15.css?v=1.0')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>caja</title>
</head>
<body>
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
            <a class="ins" href="{{route('error400.admin')}}"><p class="t1">VENTAS</p></a>
            <div class="linea"></div>
          </div>
        <div class="dash">
          <a class="ins" href="{{route('error400.admin')}}"><p class="t1">AGENDA</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="{{route('error400.admin')}}"><p class="t1">PRODUCTOS</p></a>
          <div class="linea"></div>
      
        </div>
        <div class="dash">
            <a class="ins" href="{{route('admin')}}"><p class="t1"><i class="bi bi-arrow-left"></i>ATRAS</p></a>
            
          </div>
        </div>
        <div class="cont2">
            <header class="subuser">
                <div class="mitad" >     <nav>
                  <a href=""><img class="user" src="img/buttton.png" alt=""></a>
                  
                      </nav> 
                      <p class="admn">{{ auth()->guard('empleado')->user()->name }} {{ auth()->guard('empleado')->user()->apellido }}</p>                </div>
                
                
               
            
            <div class="mitad2">
            <a class="button" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">SALIR</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
            
            
            </div>
            </header> 
            <div class="cont3">
                <form class="cont3" action="" method="get">
                <div class="menumin">
                  <nav class="modify-buttons">
                    <input class="create" type="submit" value="Generar">
                  
                    </nav>  
                
                </div>
                <div class="gen_container">
                    
                    <header class="logo_date">
                        <div class="put_logo"> <img class="size_logo" src="./img/best animal2-01 (1).png" alt="logo">   </div>
                        <div class="put_date">
<div class="future_automatic_date">
<p class="efe">Fecha:</p>
<div class="put_f_date">
<input class="cize" type="date" value="2023-03-27">


</div>
</div>

                        </div>
                    </header>
<div class="container_code">
    <p class="leters">CODIGO:</p>
    <div class="enter_code"><input class="buscador" type="search" placeholder="/" pattern="[0-9]+"></div>
    <input class="siu" type="submit" value="REGISTRAR">
</div>
<div class="container_3">
<div class="kont_1">
    <div class="cont_caja">
<div class="textos_header">     
    <div class="sub_container">CODIGO</div>
    <div class="sub_container1">DESCRIPCION</div>
    <div class="sub_container">CANTIDAD</div>
    <div class="sub_container">P. UNITARIO</div>
    <div class="sub_container">P. TOTAL</div>
</div>
<div class="cont_planilla"> <div class="sup_container">1002</div> <div class="sup_container1">concentrado hills adulto</div> <div class="sup_container"> <input class="cant_form" type="number" name="cantidad_factura_1" min="1" max="20"></div> <div class="sup_container">5.000</div><div class="sup_container">20.000</div>   </div>
<div class="cont_planilla"> <div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_2" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>    </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_3" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>     </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_4" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>    </div>
<div class="cont_planilla"> <div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_5" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>     </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_6" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>    </div>
<div class="cont_planilla"> <div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_7" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>  </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_8" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>    </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_9" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>     </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_10" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>        </div>
<div class="cont_planilla"><div class="sup_container"></div> <div class="sup_container1"></div> <div class="sup_container"><input class="cant_form" type="number" name="cantidad_factura_11" min="1" max="20"></div> <div class="sup_container"></div><div class="sup_container"></div>         </div>
    </div>
    
</div>
    <div class="kont">
<div class="kont1"><div class="text_price">EL PRECIO A PAGAR ES:</div> <div class="ingresar_valor_final">25.000</div>    </div>
<div class="kont1">
<header class="pon_titulo">ACCIONES</header>
<div class="botones"><input class="bi" type="button" value="SALIR"></div>
<div class="botones"><input class="bi" type="button" value="PAGO"></div>

</div>
<div class="kont1">
    <header class="pon_titulo">INFORMES</header>
    <div class="botones"><input class="bi" type="button" value="CIERRE DE CAJA"></div>
    <div class="botones"><input class="bi" type="button" value="INFORME DE VENTAS"></div>

</div>

    </div>


</div>
            </div>
                </div>
            </div>
        </form>
    
</body>
</html>
<?php
