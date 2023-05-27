<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style10.css') }}">

    <title>tienda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="flecha-moviles">
        <button class="flecha">
            <i class="bi bi-chevron-double-down flecha-1"></i>

        </button>

    </div>
    <style>
        input[type=number]::-webkit-outer-spin-button,

        input[type=number]::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }
    </style>

    <div class="tienda-submenu" id="tienda-submenu">
        <div class="pantalla-cerrar" id="pantalla-cerrar"></div>
        <div class="submenu">
            <div class="title ">
                <p class="shop-car"><i class="bi bi-cart3"></i></p>
                <p class="texto">CARRITO DE COMPRAS</p>
                <button class="exit" id="cerrar"><i class="bi bi-box-arrow-right "></i></button>

            </div>

        </div>


    </div>
    <header class="contenedor1">

        <div class="contenido">
            <nav class="nav_logo">
                <a href="{{route('index')}}"><img class="img_logo" src="img/best animal2-01 (1).png" alt="logo">
                </a>
            </nav>

        </div>
        <div class="contenido2">
            <nav class="search_bar">
                <div class="bar">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="BUSCAR">
                        <button class="boton-4" type="submit"><img class="lupa" src="img/lupa-removebg-preview.png" alt="buscar"></button>
                    </form>
                </div>
                <div class="publicity_container">
                    <ul class="lista">
                        <li><a class="tele" href="">productos</a> </li>
                        <ul class="lista1">
                            <li class="mini-container"><a class="list" href="">ALIMENTO</a></li>
                            <li class="mini-container"><a class="list" href="">IMPLEMENTOS</a></li>
                            <li class="mini-container"><a class="list" href="">ASEO</a></li>
                        </ul>

                    </ul>
                </div>
                <div class="carrito_container "><button class="links" id="carrito-boton"> <img class="bi" src="img/carro-removebg-preview.png"></button></div>
        </div>

        </nav>

    </header>
    <div class="space">
        <p class="text-space">Te recomendamos</p>
    </div>
    <div class="container-cards">
        <div class="put-button">
            <button class="botoncito-izq"><i class="bi bi-caret-left-fill"></i></button>

        </div>
        <div class="put-cards">
            <div class="slider">
                <form class="cards" action="" method="post">
                    <div class="container-producto">
                        <a class="poner-producto" href=""><img class="imagen-producto" src="" alt="imagen"></a>
                    </div>
                    <input type="hidden" name="id-card" value="">
                    <div class="poner-descripcion"></div>
                    <div class="container-peso-producto">
                        <button class="peso-function">5 lb</button>
                        <button class="peso-function">15 lb</button>
                    </div>
                    <div class="descuento">$87.900</div>
                    <div class="precio">12.500 <input type="hidden" name="Precio" value=""></div>
                    <div class="precioporkilo">(kilo $38.722)</div>
                    <div class="container-main-buttons">
                        <div class="amound-items">
                            <input class="decrease-button" type="button" value="-" onclick="this.parentNode.querySelector('.mostrar-cantidad').stepDown()">


                            <input class="mostrar-cantidad" name="cantidad-productos" min="1" max="15" value="1" type="number">


                            <input class="increase-button" type="button" value="+" onclick="this.parentNode.querySelector('.mostrar-cantidad').stepUp()">
                        </div>
                        <button class="purchase-button" onclick="this.parentNode.querySelector('.pibi');"> AÑADIR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="put-button">
            <button class="botoncito-derecho"><i class="bi bi-caret-right-fill"></i></button>
        </div>
    </div>


    <script src="{{ asset('js/slider.js') }}"></script>


</body>

</html>