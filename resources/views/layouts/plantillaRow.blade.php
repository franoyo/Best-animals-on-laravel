<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/stylePlantilla.css?v=1.02')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>@yield("titulo")</title>
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
@unless($errors->isEmpty())
@include('alerts.alert_register')
<script>
const alerta=document.getElementById("main-container");
setTimeout(() => {
    alerta.classList.add("mostrar")
}, 500);
</script>
@endunless
    <div class="maincontainer">
    
        <div class="cont1">
        <header class="logo">
          <img class="best" src="img/best animal2-01 (1).png" alt="main">
        
        
        
        </header>
        @yield("menuButtons")
        <div class="dash">
          <a class="ins" href="{{route('admin')}}"><p class="t1"><i class="bi bi-arrow-left"></i>ATRAS</p></a>
          <div class="linea"></div>
        
      
        
        
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
@yield("contenidoPrincipal")
</div>
</div>
            
           
        
        

    
</body>
</html>
