<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebSZ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="encabezado">
        <div class="logo">
            <div>SZ</div>
        </div>

        <div>
            <div class="menu">
                <ul class="uli">
                    <li><a href=" {{ route('Peliculas') }}">Peliculas</a></li>
                    <li><a href="{{ route('Series') }}">Series</a></li>
                    <li><a href="{{ route('Series') }}">Series</a></li>

                </ul>
                <div>
                    <select>
                        <option>Genero</option>
                        <option>Terror</option>
                        <option>Accion</option>
                        <option>Comedia</option>
                        <option>Melodrama</option>
                    </select>
                </div>
            </div>
        </div>

        <div>
            <div>
                <i class="bi bi-search"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="18" fill="white"
                    class="bi bi-search " viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                <input class="buscar" type="text" value="Buscar">
            </div>
        </div>


        <div class="iz">
            <a href="{{ route('Membresia') }}">
                <i class="bi bi-lightning-charge"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="yellow"
                    class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                    <path
                        d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                </svg>
            </a>

        </div>

            <a href="{{ route('Login') }}">
                <i class="bi bi-person-circle"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </a>

        <br>

    </div>




    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/Gun Maverick 2022.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <a href="{{ route('generos') }}"> Geneross</a>
    <a href="</a>


</body>

</html>
