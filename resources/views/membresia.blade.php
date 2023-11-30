<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=H, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membresia</title>
    @vite(['resources/css/membresia.css', 'resources/js/app.js'])


</head>

<body>
    <div class="encabezado">
        <div class="LOGO"> ZS

            <div class="rayo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="yellow"
                    class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                    <path
                        d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="e">
        <a href="{{ route('Inicio') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="purple"
                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
        </a>
    </div>


    <div class="menu">
        <div class="person">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
        </div>
        <div class="quien">
            Apreciado usuario <br>
            Conviertete en un VIP para disfrutar del acceso a todo el contenido
        </div>
    </div>
    <div class="futu">
        <div class="cua">
            <div class="cuadrado">
                <div class="estandar">Estándar</div>
                <div class="suscripcion">Suscripción mensual</div>
                <div class="precio">
                    <div class="cop">COP</div> 22,500
                </div>
                <div class="anuncio">La próxima renovación costará COP 22,500</div>
            </div>
            <div class="cuadrado">
                <div class="estandar">Premium</div>
                <div class="suscripcion">Suscripción mensual</div>
                <div class="precio">
                    <div class="cop">COP</div>26,000
                </div>
                <div class="anuncio">La próxima renovación costará COP 26,000</div>
            </div>
        </div>
        <div class="cua">
            <div class="cuadrado">
                <div class="estandar">Estándar</div>
                <div class="suscripcion">Suscripción anual</div>
                <div class="precio">
                    <div class="cop">COP</div> 230,500
                </div>
                <div class="anuncio">La próxima renovación costará COP 230,500</div>
            </div>
            <div class="cuadrado">
                <div class="estandar">Premium</div>
                <div class="suscripcion"> Suscripción anual</div>
                <div class="precio">
                    <div class="cop">COP</div>260,500
                </div>
                <div class="anuncio">La próxima renovación costará COP 260,500</div>
            </div>
        </div>
        <div class="foo"> Renovación automática 1 año después de la expiriación puedes cancelar en cualquier momento.
        </div>
    </div>
    </div>
    </div>
    <div class="men">
        <div class="play">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-google-play" viewBox="0 0 16 16">
                <path
                    d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295M1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z" />
            </svg>
           Metodo de pago  
        </div>
        
    </div>

    <a href="{{ route('Pago') }}"> Holaaaa</a>

    </div>



</body>

</html>
