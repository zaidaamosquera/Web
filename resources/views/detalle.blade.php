<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>peliculas</title>
    @vite(['resources/css/detalle.css', 'resources/js/app.js'])
</head>

<body>

    <div class="encabezado">
        <div class="logo">
            <div>SZ</div>
        </div>

        <ul class="uli">
            <li><a href=" {{ route('Peliculas') }}">Peliculas</a></li>
            <li><a href="{{ route('Series') }}">Series</a></li>
            <li><a href="{{ route('Anime') }}">Anime</a></li>


            <select class="sele">
                <option>Genero</option>
                <option>Terror</option>
                <option>Accion</option>
                <option>Comedia</option>
                <option>Melodrama</option>
            </select>

            <ul class="kiki">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="18" fill="white"
                        class="bi bi-search " viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <input class="buscar" type="text" value="Buscar">

                </li>

                <li>
                    <a href="{{ route('Membresia') }}">
                        <i class="bi bi-lightning-charge"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="yellow"
                            class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                            <path
                                d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Login') }}">
                        <div class="al">
                            <i class="bi bi-person-circle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </ul>

    </div>
    <div class="portadafo">
        {{-- <center><img src="imagenes/calamarportada.jpeg" height="400px" width="auto" alt=""></center> --}}
        <div class="zal">
            <img src="imagenes/El_juego_del_calamar_29.webp" width="180px" height="260px" alt="">
            <div class="le">
                
                <div class="letra"> JUEGO DEL CALAMAR </div> <br>
                <div class="letr">Fecha: 2020 </div> <br>
                <div class="letr"> Capitulos: 12</div> <br>
                <a href="{{ route('Lista') }}" class="lix">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                    fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                </svg> Agregar a lista
                </a>
            </div>
          
        </div>
        <div class="resumen">
            <div class="re">RESUMEN</div>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."</p>
        </div>
        <div class="capitulos">

            <button class="ñ"> Capitulo 1</button>
            <button class="ñ"> Capitulo 2</button>
            <button class="ñ"> Capitulo 3</button>
            <button class="ñ"> Capitulo 4</button>
            <button class="ñ"> Capitulo 5</button>
            <button class="ñ"> Capitulo 6</button>
            <button class="ñ"> Capitulo 7</button>
            <button class="ñ"> Capitulo 8</button>
            <button class="ñ"> Capitulo 9</button>
            <button class="ñ"> Capitulo 10</button>
            <button class="ñ"> Capitulo 11</button>
            <button class="ñ"> Capitulo 12</button>



        </div>
    </div>






























</body>

</html>
