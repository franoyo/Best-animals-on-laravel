<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/styleModalEditarMascota.css?v=1.1')}}">
</head>
<body>
    <div class="modal-container" id="editar-mascota{{$mascota->id}}">
<form class="modal" action="{{route('updateMascota.cliente')}}" method="POST">
    @csrf
<div class="cabecera">
<div class="put-logo">
    <img class="img" src="{{asset('img/best animal2-01 (1).png')}}" alt="">
</div>
<div class="put-title">EDITAR MASCOTA</div>
<div class="put-logo-1">
    <div class="put-close"><a class="btn">x</a></div>
</div>
</div>
<div class="main-content">
<div class="double">
<div class="subtitle-container">
    <div class="put-subtitle">ID:</div>
    <div class="put-subtitle">NOMBRE:</div>
    <div class="put-subtitle">ESPECIE:</div>
    <div class="put-subtitle">COLOR:</div>
</div>
<div class="general-input-container">
    <div class="divs-inputs"><input class="input" type="text" name="id" value="{{$mascota->id}}" readonly></div>
    <div class="divs-inputs"><input class="input" type="text" name="nombre" value="{{$mascota->nombre}}"></div>
    <div class="divs-inputs"><input class="input" type="text" name="especie" value="{{$mascota->especie}}"></div>
    <div class="divs-inputs"><input class="input" type="text" name="color" value="{{$mascota->color}}"></div>
</div>
</div>
<div class="double">
    <div class="subtitle-container">
        <div class="put-subtitle">GENERO:</div>
    <div class="put-subtitle">RAZA:</div>
    <div class="put-subtitle">FECHA DE NACIMIENTO:</div>
    <div class="put-subtitle">ACTUALIZAR EDAD:</div>
    </div>
    <div class="general-input-container">
        <div class="divs-inputs"><select class="input" type="text" name="genero">
            <option value="{{$mascota->genero}}" selected>El genero de la mascota es:{{$mascota->genero}}</option>
<option value="Macho">Macho</option>
<option value="Hembra">Hembra</option>
<option value="Otro">Otro</option>

        </select>
    </div>
        <div class="divs-inputs"><input class="input" type="text" name="raza" value="{{$mascota->raza}}"></div>
        <div class="divs-inputs"><input class="input" type="date" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}"></div>
        <div class="divs-inputs"><input class="act" type="submit" value="ACTUALIZAR EDAD"></div>
    </div>
</div>

</div>
<div class="container-editar">
<input type="submit" class="editar-btn" value="EDITAR">

</div>
</form>
    </div>
</body>
</html>