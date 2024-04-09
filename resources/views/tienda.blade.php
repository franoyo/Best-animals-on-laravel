<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style10.css?v=1.29') }}">

    <title>tienda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

@unless($errors->isEmpty())
@include('alerts.alerta_tienda')
<script>
const alerta=document.getElementById("main-container");
setTimeout(() => {
    alerta.classList.add("mostrar")
}, 500);
</script>
@endunless
@include("alerts.alert_producto_agregado")
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
            <div id="items-container" class="items-container">
                <div class="item-container-carrito">
               
                    <div id="card-to-purchase-container" class="card-to-purchase-container">
                        @foreach(session('carrito', []) as $productos => $producto)
                        
                        <form id="tarjeta-carrito-container" class="tarjeta-carrito-container" action="{{route('checkout')}}" method="post">
                 
                       @csrf
                       <input type="hidden" name="id-card" value="{{$producto['id']}}">
                            <div class="mitad-img-cant">
                                <div class="put-image">
                                    <img class="imagen-direct" src="{{asset($producto['imagen'])}}" alt="">
                                </div>

                                <div class="amound-items-z">
                                    <input class="decrease-button-z" type="button" value="-" onclick="updateQuantity({{$producto['id']}}, -1)">


                                    <input class="mostrar-cantidad-z" data-id="{{$producto['id']}}"  name="cantidad-productos" min="1" max="15" value="{{$producto['cantidad']}}" type="number" readonly>


                                    <input class="increase-button-z" type="button" value="+" onclick="updateQuantity({{$producto['id']}}, 1)">
                                </div>
                            </div>
                            <div class="container-descripcion-precio">
                                <div class="put-description">
                                    {{$producto['descripcion']}}
                                </div>
                                <div class="put-price">
                                    Precio: {{$producto['precio']}}
                                </div>
                            </div>
                            <input id="Cloze" type="button" value="X">
    </form>
                        @endforeach
                    </div>
                    
                    <div class="container-btns">@if(session('carrito', []))<button id="enviar-todos">ir al checkout</button>
                    @endif
                </div>
                <script>
    function updateQuantity(productId, value) {
        var cantidadInputs = document.querySelector('.mostrar-cantidad-z[data-id="' + productId + '"]');
    var nuevaCantidad = parseInt(cantidadInputs.value) + value;
    if (nuevaCantidad >= 1 && nuevaCantidad <= 15) {
        cantidadInputs.value = nuevaCantidad;
        actualizarCantidadEnServidor(productId, nuevaCantidad);
    }

    }

    function actualizarCantidadEnServidor(productId, nuevaCantidad) {
        // Enviar los datos al controlador utilizando AJAX
        fetch("{{ route('actualizarCantidadProducto') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                id: productId,
                cantidad: nuevaCantidad
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Cantidad actualizada en el servidor.');
            } else {
                console.error('Error al actualizar la cantidad en el servidor:', data.error);
            }
        })
        .catch(error => {
            console.error('Error en la solicitud AJAX:', error);
        });
    }
</script>
                   
    </div>
                <form action="{{route('vaciarCarrito')}}" class="vaciar-carrito" method="post">
                    @csrf
                    <input type="submit" value="Vaciar Carrito">
                </form>
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
                @foreach ($tarjetas as $tarjeta)
                <form class="cards" action="{{route('agregar-carrito')}}" method="post">
                    @csrf
                    <div class="container-producto">
                        <a class="poner-producto" href=""><img class="imagen-producto" src="{{asset($tarjeta->imagen)}}" alt="imagen"></a>
                    </div>
                    <input type="hidden" name="id-card" value="{{$tarjeta->id}}">
                    <div class="poner-descripcion">
                        {{$tarjeta->descripcion}}
                    </div>
                    <div class="container-peso-producto">
                        <button class="peso-function">5 lb</button>
                        <button class="peso-function">15 lb</button>
                    </div>
                    <div class="descuento"></div>
                    <div class="precio">{{$tarjeta->precio}}</div>
                    <div class="precioporkilo">(kilo)</div>
                    <div class="container-main-buttons">
                        <div class="amound-items">
                            <input class="decrease-button" type="button" value="-" onclick="this.parentNode.querySelector('.mostrar-cantidad').stepDown()">


                            <input class="mostrar-cantidad" data-id="{{$tarjeta->id}}" id="cantidad-productos" name="cantidad-productos" min="1" max="15" value="1" type="number">


                            <input class="increase-button" type="button" value="+" onclick="this.parentNode.querySelector('.mostrar-cantidad').stepUp()">
                        </div>
                        <button class="purchase-button" onclick="this.parentNode.querySelector('.pibi');"> AÑADIR</button>
                    </div>
                </form>
                @endforeach

            </div>
        </div>
        <div class="put-button">
            <button class="botoncito-derecho"><i class="bi bi-caret-right-fill"></i></button>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var forms = document.querySelectorAll('.cards');

        forms.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Evita que se envíe el formulario de manera convencional

                var formData = new FormData(form); // Obtiene los datos del formulario
                var url = form.getAttribute('action'); // Obtiene la URL del formulario

                // Realiza la solicitud AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest'); // Agrega la cabecera X-Requested-With para identificar la solicitud AJAX
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                alert("producto agregado correctamente")
                            } else {
                                alert(response.error); // Muestra un mensaje de error si lo hay
                            }
                        } else {
                            console.error(xhr.responseText); // Muestra el mensaje de error en la consola
                            alert('Error en la solicitud AJAX: ' + xhr.statusText); // Muestra un mensaje de error
                        }
                    }
                };
                xhr.send(formData); // Envía los datos del formulario
            });
        });
    });
</script>
    <script src="{{ asset('js/slider.js?v=1.29') }}"></script>


</body>

</html>