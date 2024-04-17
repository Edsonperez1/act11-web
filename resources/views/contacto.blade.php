<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
                <li><a href="{{ route('menu.casa') }}">Casa</a></li>
                <li><a href="{{ route('menu.fotos') }}">Fotos</a></li>
                <li><a href="{{ route('menu.contacto') }}" class="active">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Contacto</h1>
        <p>Contenido de la sección Contacto.</p>
    </main>

    <footer>
        <p>Realizado por Edson Pérez</p>
    </footer>
</body>
</html>