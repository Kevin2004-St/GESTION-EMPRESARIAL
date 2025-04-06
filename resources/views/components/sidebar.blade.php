<div class="sidebar" id="sidebar">
    <h2 class="sidebar-text" id="toggleSidebar">Gestor Empresarial</h2> 
    <nav class="sidebar-nav">
        <button class="accordion-toggle">📂 Clientes</button>

        <div class="accordion-content {{ Route::is('clientes.*') ? 'open' : '' }}">
            <a href="{{ route('clientes.index') }}" class="{{ request()->routeIs('clientes.index') ? 'active' : '' }}">📋 Ver Clientes</a>
            <a href="{{ route('clientes.create') }}" class="{{ request()->routeIs('clientes.create') ? 'active' : '' }}">➕ Nuevo Cliente</a>
        </div>
    </nav>


     <!-- Botón de cerrar sesión en la parte inferior -->
     <div class="logout-section">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button accordion-toggle">
                <span class="material-symbols-outlined">logout</span> Cerrar sesión
            </button>
        </form>
    </div>

</div