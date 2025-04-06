<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap">

         <!-- Estilos personalizados -->
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @stack('styles')  

    </head>
<body class="sidebar-expanded">
<header>
    <div class="header-container">       
        <div class="user-info text-white">
         @auth
        <h2 class="name-user">Bienvenido, {{ Auth::user()->name }}</h2>
         @else
        <a href="{{ route('login') }}" class="text-white underline">Iniciar sesión</a>
        @endauth
        </div>
        
    </div>
</header>
@include('components.sidebar')

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
    <script src="{{ asset('js/sidebar.js') }}"></script>
    
    @stack('scripts') 
</body>

</html>

