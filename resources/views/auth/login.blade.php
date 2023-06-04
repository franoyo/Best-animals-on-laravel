<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>iniciar sesion</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body>
    
    

        <div class="modal-container" id="content-modal">
<div class="modal">
    USUARIO NO ENCONTRADO
    <button class="visto" id="cerrar"><i class="bi bi-check-lg"></i></button>
</div>
        </div>
    <header class="org">
    @unless($errors->isEmpty())
@include('alerts.alert_register');
<script>
const alerta=document.getElementById("main-container");
setTimeout(() => {
    alerta.classList.add("mostrar")
}, 500);
</script>
@endunless
        <div class="cont">
<a   href="{{route('index')}}"><img class="img5" src="img/best animal2-01 (1).png" alt="logo"></a>

            
        </div>
    </header>
    <div class="ins">
       
        
<div class="cont2">
 
  <form class="formu" action="{{route('authenticate')}}" method="post">
    @csrf
    <p class="sesion">INICIAR SESION</p>
    <input class="correo" type="email" name="email" id="correo" placeholder="ej:example@gmail.com" required>
    <input class="correo"  type="password" name="password" placeholder="Ingrese su contraseña:" required>
    <br>
    <input class="boton" id="iniciar_sesion" name="ingresar"  type="submit" value="iniciar sesion">
</form>
    <p class="not_account">¿No tiene cuenta? <a class="regist" href="{{route('register')}}">registrese aqui</a></p>
<p class="not_account" >¿olvido su contraseña?<a class="coloru" href="">haga click aqui para recuperarla</a></p>
</div>
    </div>
<footer class="fn">
<div class="tulia">
    <p class="endtext">2022 Clínica Veterinaria Best Animals, todos los derechos reservados</p>
</div>


</footer>


</body>
</html>