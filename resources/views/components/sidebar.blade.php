@php use Illuminate\Support\Str; @endphp

<div class="sidebar" id="sidebar">
    <h2 class="sidebar-text" id="toggleSidebar">Gestor Empresarial</h2> 

    <nav class="sidebar-nav">

        <!--Modulo Clientes -->
     <button class="accordion-toggle {{ Str::startsWith(Route::currentRouteName(), 'clientes.' ) ? 'active' : '' }}">
        📂 Clientes
     </button>
        <div class="accordion-content {{ Route::is('clientes.*') ? 'open' : '' }}">
           <a href="{{ route('clientes.index') }}" class="{{ Route::is('clientes.index') ? 'active' : '' }}">📋 Ver Clientes</a>
           <a href="{{ route('clientes.create') }}" class="{{ Route::is('clientes.create') ? 'active' : '' }}">➕ Nuevo Cliente</a>
        </div>
    </nav>

            <!--Modulo Productos -->
            <button class="accordion-toggle {{ Str::startsWith(Route::currentRouteName(), 'productos.' ) ? 'active' : '' }}">
        📂 Productos
     </button>
        <div class="accordion-content {{ Route::is('productos.*') ? 'open' : '' }}">
           <a href="{{ route('productos.index') }}" class="{{ Route::is('productos.index') ? 'active' : '' }}">📋 Ver Productos</a>
        </div>
    </nav>


<!--Secciones de Inicio y cerrar sesión -->
    <div class="sidebar-section home-section">
        <a href="{{ route('home') }}" class="home-button accordion-toggle">
            <span class="material-symbols-outlined">home</span> Inicio
        </a>
    </div>

    <div class="sidebar-section logout-section">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
            <button type="submit" class="logout-button accordion-toggle">
                <span class="material-symbols-outlined">logout</span> Cerrar sesión
            </button>
        </form>
    </div>

</div>


