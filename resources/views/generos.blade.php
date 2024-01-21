<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generos</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @vite(['resources/css/estilo.css', 'resources/js/estilo.js'])
</head>

<body>
    <div id="menuu">
        <div>
            <img class="dl" src="imagenes/logito.png" width="150" height="150" alt="A" />
        </div>
        <div>
            <select id="col0" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option id="col1" value="1">
                    <a href="#f">f</a>
                </option>
                <option id="col2" value="2">Two</option>
                <option id="col3" value="3">Three</option>
                <a href="#nof?">nof?</a>
            </select>
        </div>
        <div>
            <div>
                <i id="search" class="bi bi-search"></i>
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

    <center><button><a href="{{ route('RegistrarG') }}">Registrar Genero</a></button> </center>
    <br>

    </div>

    <div>
        <center>
            <div id="peel">
                <button>Lista</button>
<<<<<<< HEAD
                <h1 id="tle">Peliculas!</h1><a href="{{ route('RegistroPelicula') }}">Registrar Peliculas</a>
=======

                <h1 id="tle">Peliculas!</h1> <button><a href="{{ route('RegistroPelicula') }}">Registrar
                        Peliculas</a></button>
>>>>>>> 5d06c0cec8b34b8928f86d6fb661d82ba1127f39
            </div>
            <br>
            <br>
        </center>


        <div id="paginas" style="height: fit-content;" class="slick-carousel">


    
            <div><img id="paginasborder" src="imagenes/ruso.jpg" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/mario.jpg" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/devo.jpg" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/gg3.jpg" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/ij.webp" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/phathan.jpg" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/raqa.jfif" height="220px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/encant.jfif" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/ofering.jpg" height="210px" alt="Not Found"></div>

        </div>

        <div>
            <br>
            <br>
            <br>

            
                <div id="tle">Series</div> 
                <br>
                <br>
            
            <div id="paginas" style="height: fit-content;" class="slick-carousel">



                <div><img id="paginasborder" alt="Hola" src="imagenes/crepusculo.jfif" height="210px"
                        alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/lucifer.jfif" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/things.jfif" height="210px" alt="Not Found"> Thinks</div>

                <div><img id="paginasborder" src="imagenes/calamar.jfif" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/paper house.jfif" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/elif.jfif" height="210px" alt="Not Found"></div>

                <div><img id="paginasborder" src="imagenes/tronos.jfif" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/merlina.jfif" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/BIGBANG.jfif" height="210px" alt="Not Found"></div>

            </div>

            <br> <br>
            <center>
                <h1 id="tle">Animes!</h1>
                <br>
                <br>
            </center>
            <div id="paginas" style="height: fit-content;" class="slick-carousel">



                <div><img id="paginasborder" alt="Hola" src="imagenes/demonslayer.jpeg" height="210px"
                        alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/note.jpeg" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/fullmetal.jpeg" height="210px" alt="Not Found"> Thinks
                </div>

                <div><img id="paginasborder" src="imagenes/ghoul.jpeg" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/swordart.jpeg" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/one punch.jpeg" height="210px" alt="Not Found"></div>

                <div><img id="paginasborder" src="imagenes/hunter.jpeg" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/heroacademy.jpeg" height="210px" alt="Not Found"></div>
                <div><img id="paginasborder" src="imagenes/descarga.jpeg" height="210px" alt="Not Found"></div>








            </div>

            <div id="poster"></div>
            <style>
                /* Estilos para los botones previos y siguientes */
                .slick-prev,
                .slick-next {
                    font-size: 20px;
                    line-height: 1;
                    position: absolute;
                    top: 50%;
                    z-index: 1;
                    width: 90px;
                    height: 40px;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    cursor: pointer;
                    background-color: #00ffff;
                    color: #000000;
                    border: none;
                    border-radius: 50%;
                }

                /* Estilos al pasar el cursor sobre los botones */
                .slick-prev:hover,
                .slick-next:hover {
                    background-color: #00ffff;
                }

                /* Estilos para el botón previo */
                .slick-prev {
                    left: 10px;
                }

                /* Estilos para el botón siguiente */
                .slick-next {
                    right: 10px;
                }
            </style>
            <script>
                $(document).ready(function() {
                    $('.slick-carousel').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3500,
                        responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                });
            </script> <br>


            <div class="contenedor">
                <div class="portada">
                    <div>
                        <center><img src="imagenes/descarga.jpeg" height="210px" alt="Not Found"> </center>
                    </div>
                </div>
                <center>
                    <div class="titulo"> GUARDIANES DE LA GALAXIA</div>
                </center>
                <center>
                    <button class="ver"> <i class="bi bi-play-fill" color white ></i> ver ahora </button>
                </center>
            </div>


</body>

</html>
