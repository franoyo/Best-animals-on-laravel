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
<div class="contenido1"><header class="logo">
<a class="fix" href="index.html"><img class="logeishon" src="img/best animal2-01 (1).png" alt="logo">
    



</a>


</header>
<img class="gato" src="img/pussy.PNG" alt="gato">

</div>
<div class="contenido2">
<h1 class="register">REGISTRARSE</h1>
<form class="formulario"  action="{{ route('authenticate')}}"  method="post">
<input class="reg" name="nombre_registro" type="text" placeholder="Nombre:" required>

<input class="reg" name="apellidos_registro" type="text" placeholder="Apellidos:" required>
<input class="reg" name="documento_registro" type="text" placeholder="Documento:" required>
    
<input class="reg" name="celular_registro" type="number" placeholder="Celular:" required>
<input class="reg" name="direccion_registro" type="text" placeholder="Direccion:" required>
    
<input class="reg" name="ciudad_registro" type="text" placeholder="Ciudad:" required>
<input class="reg" name="email_registro" type="email" placeholder="Email:" required>
<input class="reg" name="password_registro" type="password" placeholder="Contraseña:" required>

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