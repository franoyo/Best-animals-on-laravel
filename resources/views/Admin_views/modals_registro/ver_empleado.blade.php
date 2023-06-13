<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/style22.css?v=1.1')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<div class="container-general" id="modal-ver{{$empleados->id}}">
<div class="container-modal" id="bg">
    
<div class="container-logo">
    <div class="put-logo">
<img class="logo" src="img/best animal2-01 (1).png" alt="logo">

    </div>
    <p>VER EMPLEADOS</p>
<input class="put-close" type="button" id="boton-b{{$empleados->id}}" value="X">
 

</div>
<div class="container-form">
    <div class="row1">
        <div class="mitad-1">
            <div class="subtitle" >ID EMPLEADO:</div>
            <div class="container-input" id="cont-op"> 
            {{$empleados->id}}    
            </div> 
        </div>
        <div class="mitad-2"><div class="subtitle-2">NOMBRE:</div>
        <div class="container-input-2">
            <input class="input-2" type="text" name="name" value="{{$empleados->name}}" readonly>

        </div> 
    </div>
    </div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">APELLIDOS:</div> 
        <div class="container-input">
<input class="input-1" type="text" name="apellido" value="{{$empleados->apellido}}" readonly>

        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">DOCUMENTO:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="documento" value="{{$empleados->documento}}" readonly>

    </div> </div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CELULAR:</div>
        <div class="container-input">
            <input class="input-1" type="number" name="celular" value="{{$empleados->celular}}" maxlength="10" readonly>

        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">DIRECCION:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="direccion" value="{{$empleados->direccion}}" readonly>

    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">ROL:</div> 
        <div class="container-input">
            <select class="input-1" type="text" name="ROL" readonly>
            <option value="{{$empleados->rol}}" selected>Su rol es:{{$empleados->rol}}</option>
            </select>
        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">EMAIL:</div>
    <div class="container-input-2">
        <input class="input-2" type="email" name="email" value="{{$empleados->email}}" readonly>
    </div> 
</div></div> 
</div>

</div>

</div>
</body>
</html>