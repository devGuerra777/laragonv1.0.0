<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $noticia->titulo }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .fecha-categoria {
            font-size: 0.9em;
            color: #777;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $noticia->titulo }}</h1>
        <div class="fecha-categoria">
            <p><strong>Fecha:</strong> {{ $noticia->fecha }}</p>
            <p><strong>Categoría:</strong> {{ $noticia->categoria }}</p>
        </div>
        <p>{{ $noticia->noticia }}</p>

        <a href="{{ route('noticia.index') }}">Volver al listado</a>
        
    </div>
</body>
</html>
