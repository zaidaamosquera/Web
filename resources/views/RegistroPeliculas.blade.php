<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="shortcut" rel="stylesheet" href="imagenes/devo.jpg">
    @vite(['resources/css/estilo.css', 'resources/js/estilo.js'])
    <title>Registro Peliculas</title>
</head>

<body>

    <h2 id="ltrs">Registro De Peliculas</h2>
    <form action="{{route('RegistroPeli')}}" method="POST" id="ltrs">
        @csrf

        <label for="">Titulo</label>
        <input name="TituloPeliculas" type="text">
        @error("TituloPeliculas")
        {{$message}}
        @enderror
        <label for="">FechaEstreno</label>
        <input name="FechaEstreno" type="date">
        <label for="">Generos</label>



        <select name="Generos_idGeneros" >
            @foreach ($GenerContr as $GeneContr)
                <option value="{{ $GeneContr->idGeneros }}">{{ $GeneContr->NombreGenero }}</option>
            @endforeach
        </select>




        <label for="">Productoras</label>
        <select name="Productoras_idProductas" >
            @foreach ($ProduContr as $ProdContr)
                <option value="{{ $ProdContr->idProductoras }}">{{ $ProdContr->NombreProductora }} {{ $ProdContr->Nacionalidad }}</option>
            @endforeach
        </select>

        <button>Enviar</button>

    </form>

</body>

</html>
