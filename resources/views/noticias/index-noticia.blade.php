<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Noticias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007bff;
        }
        a {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .no-noticias {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }
        .titulo-noticia a {
            color: #333;
            text-decoration: none;
        }
        .titulo-noticia a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Noticias</h1>

        <a href="{{ route('noticia.create') }}">Agregar Nueva Noticia</a>

        @if($noticias->isEmpty())
            <div class="no-noticias">
                <p>No hay noticias disponibles.</p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Fecha</th>
                        <th>Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noticias as $noticia)
                        <tr>
                            <td class="titulo-noticia">
                                <a href="{{ route('noticia.show', $noticia->id) }}">{{ $noticia->titulo }}</a>
                            </td>
                            <td>{{ $noticia->fecha }}</td>
                            <td>{{ $noticia->categoria }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
