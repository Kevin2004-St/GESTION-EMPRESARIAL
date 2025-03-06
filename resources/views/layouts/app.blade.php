<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    @stack('styles')  
</head>
<body>
    <header>
        <h1>Gestión de Clientes</h1>
    </header>

    <main>
        @if (session('success'))
    <div id="alerta-exito" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>

       <script>
        setTimeout(function() {
            let alerta = document.getElementById('alerta-exito');
            if (alerta) {
                alerta.style.transition = "opacity 0.5s";
                alerta.style.opacity = "0";
                setTimeout(() => alerta.remove(), 500); // Se elimina completamente después de la animación
            }
        }, 4000); // El mensaje desaparecerá después de 4 segundos
     </script>
      @endif
 

        @yield('content')
    </main>

    <footer>
        <p>© 2025 Mi Aplicación Derechos Autor Kevin Fernandez</p>
    </footer>
</body>
</html>
