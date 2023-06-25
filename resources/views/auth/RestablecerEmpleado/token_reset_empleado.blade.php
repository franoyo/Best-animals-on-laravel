<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña Empleado</title>
    <link rel="stylesheet" href="{{asset('css/styleResetPassword2.css')}}">
</head>
<body>
    <header class="container-header">
        <a class="put-logo" href="#">
            <img class="image" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
        </a>
    </header>
    <main class="container-principal">
        <form class="form" method="post" action="">
            @csrf
<div class="put-title">
    RESTABLECER CONTRASEÑA EMPLEADO
</div>
<div class="put-input">
    <input type="text" name="token" value="{{$token}}" hidden>
<input class="input-email" type="email" name="email" placeholder="Correo Electronico" value="{{$email}}" readonly >
</div>
<div class="put-input">
    <input class="input-email" type="password" name="password" placeholder="CONTRASEÑA" required autofocus>
    </div>
    <div class="put-input">
        <input class="input-email" type="password" name="password_confirmation" placeholder="CONFIRMAR CONTRASEÑA" required>
        </div>
<div class="button">
    <input class="button-1" type="submit" value="RESTABLECER">
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