<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styleChekout.css') }}">
</head>
<body>
    <header class="header-container">
        <div class="put-img">
            <img src="{{asset('img/best animal2-01 (1).png')}}" alt="logo Empresa" width="100%" height="100%">
        </div>
    </header>
    <main class="containerCheckout">
        <div class="mitad">
            <div class="sub1"><div class="titulo">Precio Total De La Compra:</div>
        <div class="put-price">{{$total}}</div></div>
            <div class="sub"><a href=""><-atras</a></div>
            
        </div>
        <div class="checkOut">
            <div class="title-checkout">CHECKOUT</div>
           
            <div class="container-productos">
                 @foreach(session('carrito', []) as $productos => $producto)
                <div class="product">
                    <div class="img">
                        <img width="100%" height="100%" src="{{asset($producto['imagen'])}}" alt="imagen del producto">
                    </div>
                    <div class="descripcion">
                        <div class="title">
                            Descripcion del producto
                        </div>
                        <div class="put-info">{{$producto['descripcion']}}</div>
                    </div>
                    <div class="cantidad">
                        <div class="titleZ">
                            Cantidad
                        </div>
                        <div class="put-info">{{$producto['cantidad']}}</div>
                    </div>
                    <div class="precio">
                        <div class="tittle">
                            Precio
                        </div>
                        <div class="put-info">{{$producto['precioFinal']}}</div>
                    </div>
                </div>  
                 @endforeach
            </div>
        </div>
        <div class="mitad1">
            <div class="sub">Ten en cuenta que para continuar con la compra debes iniciar sesion!</div>
            <div class="sub"><a href="">INICIAR SESION</a></div>
        </div>
    </main>
    <footer class="containerLittleFooter">
        2022 Clínica Veterinaria Best Animals, todos los derechos reservados
    </footer>
</body>
</html>