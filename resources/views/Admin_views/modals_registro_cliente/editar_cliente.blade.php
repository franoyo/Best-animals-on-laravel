<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/style22.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<div class="container-general" id="modal-editar{{$cliente->id}}">
<form class="container-modal" action="{{route('editCliente')}}" method="post">
    @csrf
<div class="container-logo">
    <div class="put-logo">
<img class="logo" src="img/best animal2-01 (1).png" alt="logo">

    </div>
    <p>EDITAR CLIENTES</p>
<input class="put-close" type="button" id="boton-x{{$cliente->id}}" value="X">
 

</div>
<div class="container-form">
    <div class="row1">
        <div class="mitad-1">
            <div class="subtitle" >ID CLIENTE:</div>
            <div class="container-input" id="cont-op"> 
            {{$cliente->id}}   <input type="text" name="id" value="{{$cliente->id}}" hidden>  
            </div> 
        </div>
        <div class="mitad-2"><div class="subtitle-2">NOMBRE:</div>
        <div class="container-input-2">
            <input class="input-2" type="text" name="name" value="{{$cliente->name}}" required>

        </div> 
    </div>
    </div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">APELLIDOS:</div> 
        <div class="container-input">
<input class="input-1" type="text" name="apellido" value="{{$cliente->apellido}}" required>

        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">DOCUMENTO:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="documento" value="{{$cliente->documento}}" required>

    </div> </div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CELULAR:</div>
        <div class="container-input">
            <input class="input-1" type="number" name="celular" value="{{$cliente->celular}}" maxlength="10" required>

        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">DIRECCION:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="direccion" value="{{$cliente->direccion}}" required>

    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CLAVE:</div> 
        <div class="container-input">
            <input class="input-1" type="text" name="password">
        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">EMAIL:</div>
    <div class="container-input-2">
        <input class="input-2" type="email" name="email" value="{{$cliente->email}}" required>
    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CONFIRMAR CONTRASEÑA:</div>
        <div class="container-input">
            <input class="input-1" type="text" name="password_confirmation">
        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2"></div>
</div></div>
</div>
<div class="container-boton">
<input class="register-button" type="submit" value="EDITAR CLIENTE">

</div>

</form>


</div>


   
</body>
</html>