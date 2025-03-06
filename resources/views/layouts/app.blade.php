<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')  
</head>
<body>
<header>
    <div class="header-container">
        <h1>Gestión de Clientes</h1>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="nav-links">
            <a href="{{ route('clientes.index') }}" class="{{ request()->routeIs('clientes.index') ? 'active' : '' }}">Clientes</a>
            <a href="{{ route('clientes.create') }}" class="{{ request()->routeIs('clientes.create') ? 'active' : '' }}">Nuevo Cliente</a>
        </nav>
    </div>
</header>
    <main>
        @if (session('success'))
            <div id="alerta-exito" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>© 2025 Mi Aplicación Derechos Autor Kevin Fernandez</p>
    </footer>

    <!-- Llamada al script externo -->
    <script src="{{ asset('js/alerta.js') }}"></script>
    @stack('scripts') 
</body>
</html>
