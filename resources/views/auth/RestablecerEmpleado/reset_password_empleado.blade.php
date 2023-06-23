<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="{{asset('css/styleResetPassword.css?v=1.1')}}">
</head>
<body>
    <header class="container-header">
        <a class="put-logo" href="{{route('login')}}">
            <img class="image" src="img/best animal2-01 (1).png" alt="">
        </a>
    </header>
    <main class="container-principal">
        <form class="form" method="POST" action="{{route('empleado.password.sent')}}">
            @csrf
<div class="put-title">
    RESTABLECER CONTRASEÑA
</div>
<div class="put-description">
    Si Usted Es Empleado Y Desea Restablecer Su Contraseña Digite Su Correo Electronico:
</div>
<div class="put-input">
<input class="input-email" type="email" name="email" placeholder="Correo Electronico" required autofocus>
</div>
<div class="button">
    <input class="button-1" type="submit" value="Enviar Solicitud">
</div>
<div class="container-alert">
@unless($errors->isEmpty())
@foreach ($errors->all() as $error)
            <span class="with-error">{{ $error }}</span>
        @endforeach
@endunless
@if(session('status'))
       <span class="con-bendicion">{{ session('status') }}</span> 
@endif
</div>
</form>
    </main>
    
</body>
</html>