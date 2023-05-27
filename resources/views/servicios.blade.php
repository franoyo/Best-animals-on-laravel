<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>servicios</title>
    <link rel="stylesheet" href="{{ asset('css/style7.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <header class="contenedor1">
        
<div class="contenido">
<nav class="nav_logo" >
<a href="{{route('index')}}"><img class="img_logo" src="img/best animal2-01 (1).png" alt="logo">
</a>
</nav>

</div>
    </header>
<div class="middle_contenedor">
<div class="contenido1">
    <header class="titulo">
<h3 class="main_tittle">Nuestros Servicios:</h3>


    </header>
    <div class="texto">
        <p class="description">En Best Animals Contamos con un equipo de trabajo altamente calificado, mas de 18 años de experiencia, con la disposición de dar dosis diarias de amor a tus mascotas contamos con equipos tecnológicos de ultima generación para procedimientos y tratamientos efectivos y brindamos a tus mascotas sus mejores momentos en nuestras manos.</p>
    </div>
</div>

<nav class="contenido2">
    
    <div class="icono">
       
<div class="icono_general">
   
    <a class="ceta" href="{{route('spa')}}"><img class="size_images" src="img/Boton_Spa-removebg-preview.png" alt="Spa"></a>
    <br>
    <a class="letter" href="{{route('spa')}}">SPA</a>
    
</div>
<div class="icono_general">
<a class="ceta" href="{{route('consulta')}}"><img class="size_images" src="img/Boton_clinica_veterinaria-removebg-preview.png" alt="clinica"></a><br>
<a class="letter" href="{{route('consulta')}}">CLINICA VETERINARIA</a>
</div>
    </div>
    <div class="icono">
        <div class="icono_general">
            <a class="ceta" href="{{route('viaje')}}"><img class="size_images" src="img/Boton_avion-removebg-preview.png" alt="avion"></a><br>
           
        <a class="letter" href="{{route('viaje')}}">CERTIFICADOS DE VIAJE</a>
        </div>
        <div class="icono_general">
            <a class="ceta" href="{{route('guarderia')}}"><img class="size_images" src="img/Boton_Hospedaje-removebg-preview.png" alt="clinica"></a><br>
        <a class="letter" href="{{route('guarderia')}}">HOSPEDAJE</a>
        </div>

    </div>

</div>

</nav>

<footer class="pie">
    <p>2022 clinica best animals todos los derechos reservados</p>


</footer>

    
</body>
</html>
