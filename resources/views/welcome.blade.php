<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trabajo con Solorzanis</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

      
    </head>
    <body>
         <div>
            <div class="logo">SZ</div>
            <div class="menu" > Peliculas  Series Generos</div>
            
        </div>
        
        <a href="{{route("generos")}}"></a>


    </body>
</html>
