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


    <div>
        <center>
            <h1 id="tle">Peliculas!</h1>
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
            <div><img id="paginasborder" src="imagenes/raqa.jfif" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/encant.jfif" height="210px" alt="Not Found"></div>
            <div><img id="paginasborder" src="imagenes/ofering.jpg" height="210px" alt="Not Found"></div>

        </div>

        <div>
            <br>
            <br>
            <br>

            <center>
                <h1 id="tle">Series!</h1>
                <br>
                <br>
            </center>
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
                <div><img id="paginasborder" src="imagenes/fullmetal.jpeg" height="210px" alt="Not Found"> Thinks</div>

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
        </script>


</body>

</html>
