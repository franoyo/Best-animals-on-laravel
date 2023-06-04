<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css\style26.css')}}">
      <title>dashboard Main</title>
  </head>
  
  <body>
      
      <div class="maincontainer">
          <div class="cont1">
              <header class="logo">
                <img class="best" src="img/best animal2-01 (1).png" alt="main">
              
              
              
              </header>
              <div class="dash">
                <a class="ins" href="dashboar_caja_registro.php"><p class="t1">CAJA</p></a>
                <div class="linea"></div>
              
              
              
              </div>
              
              <div class="dash">
              <a class="ins" href="dashoboard_admin_stock.php"><p class="t1">STOCK</p></a>
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
                <a class="ins" href="dashboard historias clinicas admin.php"><p class="t1">HISTORIAS CLINICAS</p></a>
                <div class="linea"></div>
              </div>
              <div class="dash">
                <a class="ins" href="gestion_usuario_empleados.php"><p class="t1">GESTION DE OPERARIOS</p> </a>
               
                <div class="linea"></div>
              </div>
              
              </div>
              <div class="cont2">
                  <header class="subuser">
                      <div class="mitad" >     <nav>
                        <a href=""><img class="user" src="img/buttton.png" alt=""></a>
                        
                            </nav> 
                            <p class="admn">{{ Auth::user()->name }}</p>                </div>
                  <div class="mitad2">
                    <a class="button" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">SALIR</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                  </div>
                  </header>
                  <div class="cont3">
                      <div class="welcome">
                          <p>BIENVENIDO!</p>
                      </div>
                      <div class="administrador">
                          <p class="auth">{{ Auth::user()->name }}</p>Es un gusto tenerlo de vuelta!
                      </div>
                      <div class="cont-image">
                          <div class="put-gift">
                              <img class="mish" src="img/gato-imagen-animada-0301.gif" alt="gift">
                          </div>
                      </div>
                  </div>
              </div>
              
  
  </body>
  
  </html>