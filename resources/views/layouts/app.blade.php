<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <!-- Iconos -->
        <!-- Precargar fuente de Google para evitar flash -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" href="{{ asset('/icon/favicon.ico') }}" type="image/x-icon">


        <!-- Esta línea carga el CSS que activa los iconos -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

        <!-- Precarga directa del archivo WOFF2 (mejora visual) -->
        <link rel="preload" as="font" type="font/woff2" crossorigin 
        href="https://fonts.gstatic.com/s/materialsymbolsoutlined/v134/kJF1Bv0E3c4q6zWlZ2BOaW0AUnf5_A.woff2">


         <!-- Estilos personalizados -->
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">


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
   <main>
     <div class="sidebar-container">
        @include('components.sidebar')

        <div class="alert-content">
            @if (session('success'))
                <div id="alerta-exito" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
    </main>
    <footer>
        <p>© 2025 Mi Aplicación Derechos Autor Kevin Fernandez</p>
    </footer>

    <!-- Llamada al script externo -->
    <script src="{{ asset('js/alerta.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/confirmacion.js') }}"></script>
    @stack('scripts') 
</body>

</html>

