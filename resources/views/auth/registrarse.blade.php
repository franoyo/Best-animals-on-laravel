<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="{{asset('css\style3.css')}}">
</head>
<body>
    <div class="maincointainer1">
    
    @unless($errors->isEmpty())
@include('alerts.alert_register')
<script>
const alerta=document.getElementById("main-container");
setTimeout(() => {
    alerta.classList.add("mostrar")
}, 500);
</script>
@endunless
<div class="contenido1"><header class="logo">
<a class="fix" href="{{route('index')}}"><img class="logeishon" src="img/best animal2-01 (1).png" alt="logo">
</a>
</header>
<img class="gato" src="img/pussy.PNG" alt="gato">

</div>
<div class="contenido2">
<h1 class="register">REGISTRARSE</h1>
<form class="formulario"  action="{{route('store')}}"  method="post">
@csrf
<input class="reg" name="name" type="text" placeholder="Nombre:" value="{{ old('name') }}" required>
<input class="reg" name="apellido" type="text" placeholder="Apellido:" value="{{ old('apellido') }}" required>
<input class="reg" name="documento" type="number" placeholder="Documento:" value="{{ old('documento') }}" required>
<input class="reg" name="direccion" type="text" placeholder="Direccion:" value="{{ old('direccion') }}" required>
<input class="reg" name="celular" type="number" placeholder="Celular:" value="{{ old('celular') }}" required>


<input class="reg" name="email" type="email" value="{{ old('email') }}" placeholder="Email:" required>

<input class="reg" name="password" type="password" value="{{ old('password') }}" placeholder="Contraseña:" required>

<input class="reg" name="password_confirmation" type="text" placeholder="confirmar contraseña" required>

<input class="reg1"  type="submit" value="FINALIZADO">
</form>
</div>

        
    </div>
    <footer class="fnn">
<div class="finn">
    <p class="vet">2022 Clínica Veterinaria Best Animals, todos los derechos reservados </p>



</div>


    </footer>
   
   
    
    
</body>
</html>