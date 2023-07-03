<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css\style26.css?v=1.0')}}">
      <title>dashboard Main</title>
  </head>
  
  <body>
 
      <div class="maincontainer">
      @if(session('success'))
      @include('alerts.alert_sucess')
    <script>
      const alert=document.getElementById("launch-alert")
      setTimeout(() => {
        alert.classList.add("mostrar")
      }, 500);
      setTimeout(() => {
        alert.classList.remove("mostrar")
      }, 1700);
    </script>
@endif
@unless($errors->isEmpty())
@include('alerts.alert_sucess')
<script>
     
      setTimeout(() => {
        alert.classList.add("mostrar")
      }, 500);
      setTimeout(() => {
        alert.classList.remove("mostrar")
      }, 1700);
    </script>
@endunless
          <div class="cont1">
        
              <header class="logo">
                <img class="best" src="img/best animal2-01 (1).png" alt="main">
              
              
              
              </header>
              <div class="dash">
                <a class="ins" href="{{route('mascotas.cliente')}}"><p class="t1">MIS MASCOTAS</p></a>
                <div class="linea"></div>
              </div>
              
              
              </div>
              <div class="cont2">
                  <header class="subuser">
                      <div class="mitad" >     <nav>
                        <a href=""><img class="user" src="img/buttton.png" alt=""></a>
                        
                            </nav> 
                            <p class="admn">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</p>                </div>
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
                          <p class="auth">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</p>Es un gusto tenerte de vuelta!
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