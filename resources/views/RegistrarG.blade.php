<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="shortcut" rel="stylesheet" href="imagenes/devo.jpg">
    @vite(['resources/css/estilo.css', 'resources/js/estilo.js'])
    <title>Registro Generos</title>
</head>

<body>

    <h2 id="ltrs">Registro De Peliculas</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <thead>
            @foreach ($todGens as $elgenero)
                <tr>
                    <form  action="{{ route('EditG', $elgenero->idGeneros) }}" method="POST" >
                    <td><input name="NombreGenero" type="text" value="{{ $elgenero->NombreGenero }}"></td>
                    <td>
                            @method("PATCH")   @csrf
                            <button>Editar</button>
                        </form>
                        <form  action="{{ route('DeletG', $elgenero->idGeneros) }}" method="POST" >
                            @method("DELETE")   @csrf
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <form action="{{ route('RegistroGen') }}" method="POST" id="ltrs">
                    @csrf

                    <td><input name="NombreGenero" type="text"></td>

                    @error('NombreGenero')
                        {{ $message }}
                    @enderror
                    <td><button>Enviar</button> </td>
                </form>
            </tr>
        </thead>
    </table>

</body>

</html>
