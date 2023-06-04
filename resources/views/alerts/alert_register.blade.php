<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style69.css?v1.01') }}">
    <title>Document</title>
</head>
<body>
    <div id="main-container" class="container-alert">
<div class="alert-body">
    <div class="container-image">
        <img class="gif-perro" src="img/animal-imagen-animada-0013.gif" alt="gif">
    </div>
    <div class="container-text">
    @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    </div>
</div>

    </div>
</body>
</html>