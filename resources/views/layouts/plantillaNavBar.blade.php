<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css\style26.css?v=1.0')}}">
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
              @yield("botones-menu")
             
         
              
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
              @yield("mainContent")
              </div>
                     
                  </div>
              </div>
              
  
  </body>
  
  </html>