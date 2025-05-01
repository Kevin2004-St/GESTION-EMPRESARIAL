@php use Illuminate\Support\Str; @endphp

<div class="sidebar" id="sidebar">

    <div class="sidebar-logo" id="toggleSidebar">
        <img src="{{ asset('img/logo-inicio.webp') }}" class="sidebar-img" alt="Gestor Empresarial" style="max-width: 100%; height: auto;">
    </div>

    <nav class="sidebar-nav">

        <!--Modulo Clientes -->
     <button class="accordion-toggle toggle {{ Str::startsWith(Route::currentRouteName(), 'clientes.' ) ? 'active' : '' }}">
        📂 Clientes
     </button>
        <div class="accordion-content {{ Route::is('clientes.*') ? 'open' : '' }}">
           <a href="{{ route('clientes.index') }}" class="{{ Route::is('clientes.index') ? 'active' : '' }}">📋 Ver clientes</a>
           <a href="{{ route('clientes.create') }}" class="{{ Route::is('clientes.create') ? 'active' : '' }}">➕ Nuevo cliente</a>
        </div>
    </nav>

            <!--Modulo Productos -->
            <button class="accordion-toggle toggle {{ Str::startsWith(Route::currentRouteName(), 'productos.' ) ? 'active' : '' }}">
        📂 Productos
     </button>
        <div class="accordion-content {{ Route::is('productos.*') ? 'open' : '' }}">
           <a href="{{ route('productos.index') }}" class="{{ Route::is('productos.index') ? 'active' : '' }}">📋 Ver productos</a>
           <a href="{{ route('productos.create') }}" class="{{ Route::is('productos.create') ? 'active' : '' }}">➕ Nuevo producto</a>

        </div>
    </nav>


<!--Secciones de Inicio y cerrar sesión -->
    <div class="sidebar-section home-section">
        <a href="{{ route('home') }}" class="home-button  accordion-toggle ">
            <span class="material-symbols-outlined">home</span> Inicio
        </a>
    </div>

    <div class="sidebar-section logout-section">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
            <button type="submit" class="logout-button  accordion-toggle ">
                <span class="material-symbols-outlined">logout</span> Cerrar sesión
            </button>
        </form>
    </div>

</div>


