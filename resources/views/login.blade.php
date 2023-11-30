<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio de Sesion</title>
    @vite(['resources/css/login.css', 'resources/js/app.js'])

</head>

<body>
    <div class= "Login">
        <div class="log">SZ</div>
        <div class="TituloLogin">Iniciar sesión</div>

        <div class="Titulosl">Correo:</div>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <input class="inpu" type="text">

        </div>

        <div class="Titulosl">Constraseña:</div>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path
                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
            </svg>
            <input class="inpu" type="password">
        </div>

        {{-- <div class="botonlogin">
            <button>Ingresar</button>
        </div> --}}
    <a href="{{route('Principal')}}" class="btn-neon">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Ingresar
        </a> <br>

        <a class="link" href="{{ route('Registrarse') }}"> Registrarse</a>


    </div>


</body>
