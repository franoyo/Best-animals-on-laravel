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
<div class="container-general" id="modal">
<form class="container-modal" action="{{route('ingresarEmpleado')}}" method="post">
    @csrf
<div class="container-logo">
    <div class="put-logo">
<img class="logo" src="img/best animal2-01 (1).png" alt="logo">

    </div>
    <p>REGISTRO DE EMPLEADOS</p>
<input class="put-close" type="button" id="boton-cerrar" value="X">
 

</div>
<div class="container-form">
    <div class="row1">
        <div class="mitad-1">
            <div class="subtitle" >ID EMPLEADO:</div>
            <div class="container-input" id="cont-op"> 
                {{$mostrar}}     
            </div> 
        </div>
        <div class="mitad-2"><div class="subtitle-2">NOMBRE:</div>
        <div class="container-input-2">
            <input class="input-2" type="text" name="name" value="{{ old('name') }}" required>

        </div> 
    </div>
    </div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">APELLIDOS:</div> 
        <div class="container-input">
<input class="input-1" type="text" name="apellido" value="{{ old('apellido') }}" required>

        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">DOCUMENTO:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="documento" value="{{ old('documento') }}" required>

    </div> </div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CELULAR:</div>
        <div class="container-input">
            <input class="input-1" type="number" name="celular" value="{{ old('celular') }}" maxlength="10" required>

        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">DIRECCION:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="direccion" value="{{ old('direccion') }}" required>

    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CLAVE:</div> 
        <div class="container-input">
            <input class="input-1" type="password" name="password" required>
        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">EMAIL:</div>
    <div class="container-input-2">
        <input class="input-2" type="email" name="email" value="{{ old('email') }}" required>
    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CONFIRMAR CONTRASEÑA:</div>
        <div class="container-input">
            <input class="input-1" type="password" name="password_confirmation" required>
        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">ROL ID:</div>
    <div class="container-input-2">
        <select class="input-2" name="rol" required>

            
        
            
            <option value="auxliar_de_bodega">1.AUXILIAR DE BODEGA</option>

            <option value="veterinario">2.VETERINARIO</option>

            <option value="caja">3.CAJA</option>
            
            </select>

    </div> 
</div></div>
</div>
<div class="container-boton">
<input class="register-button" type="submit" value="REGISTRAR EMPLEADO">

</div>

</form>


</div>


    
</body>
</html>