<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa</title>
    <style>
        /* Estilos para resaltar el elemento activo en el menú */
        .active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('menu.index') }}">Inicio</a></li>
                <li><a href="{{ route('menu.casa') }}" class="active">Casa</a></li>
                <li><a href="{{ route('menu.fotos') }}">Fotos</a></li>
                <li><a href="{{ route('menu.contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Casa</h1>
        <p>Contenido de la sección Casa.</p>
    </main>

    <footer>
        <p>Realizado por Edson Pérez</p>
    </footer>
</body>
</html>