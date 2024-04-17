<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús</title>
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
                <li><a href="{{ route('menu.index') }}" class="{{ Request::path() == '/' ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('menu.casa') }}" class="{{ Request::path() == 'casa' ? 'active' : '' }}">Casa</a></li>
                <li><a href="{{ route('menu.fotos') }}" class="{{ Request::path() == 'fotos' ? 'active' : '' }}">Fotos</a></li>
                <li><a href="{{ route('menu.contacto') }}" class="{{ Request::path() == 'contacto' ? 'active' : '' }}">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Bienvenido a nuestra página</h1>
        <p>Selecciona una opción del menú para explorar.</p>
    </main>

    <footer>
        <p>Realizado por Edson Pérez</p>
    </footer>
</body>
</html>