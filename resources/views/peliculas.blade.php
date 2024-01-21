<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>peliculas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<div class="organizador">
<div class="titulope">PELICULAS</div>

<div class="fila">
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-19 at 12.44.20 PM.jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/mario.jpg" height="200px" alt=""> 
    <div class="descrip"> PELICULA DE MARIO BROS                </div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.41 PM.jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.41 PM (3).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.41 PM (1).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.40 PM (6).jpeg" height="200px" alt=""> 
    <div class="descrip"> PELICULA YO ANTES DE TI</div>
    </div>
 

</div>

<div class="fila">
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.40 PM (5).jpeg" height="200px" alt=""> 
    <div class="descrip">RELICULA DE MEEGANNN</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.40 PM (4).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.40 PM (3).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.40 PM (2).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.39 PM.jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.39 PM (1).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
 

</div>
<div class="fila">
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.27 PM.jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.27 PM (1).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM.jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (6).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (5).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="individual">
        <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (4).jpeg" height="200px" alt=""> 
    <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
    </div>
    <div class="fila">
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (3).jpeg" height="200px" alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (2).jpeg" height="200px" alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.26 PM (1).jpeg" height="200px" alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.25 PM (2).jpeg" height="200px" alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.31.25 PM (1).jpeg" height="200px"alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
        <div class="individual">
            <img src="imagenes/WhatsApp Image 2024-01-21 at 1.03.41 PM.jpeg" height="200px" alt=""> 
        <div class="descrip">RAPIDOS Y FURIOSO ULTRA 4</div>
        </div>
     
    
    </div>
 

</div>





</div>


    
</body>
</html>