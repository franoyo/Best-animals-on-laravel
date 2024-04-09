<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style69.css?v1.05') }}">
    <title>Document</title>
</head>
<body>
    <div id="main-container" class="container-alert">
<div class="alert-body">
    <div class="container-image">
        <button class="cerrate" id="cloze" onclick="cerrarMIAlerta()">X</button>
        <img class="gif-perro" src="{{asset('img/animal-imagen-animada-0013.gif')}}" alt="gif">
    </div>
    <div class="container-text">
    
    @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    </div>
</div>

    </div>
    <script>
        function cerrarMIAlerta(){
const modal=document.getElementById("main-container")
modal.classList.remove("mostrar");

        }
    </script>
</body>
</html>