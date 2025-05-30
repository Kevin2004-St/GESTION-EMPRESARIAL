@extends('layouts.app')

@section('content')


<div class="container">
    <h2 class="tittle">Categorias</h2>
    
    <!-- Formulario de búsqueda -->
      <!-- Formulario de búsqueda -->
      <div class="form-busqueda-contenedor">
    <form method="GET" action="{{ route('categorias.index') }}" class="form-busqueda">
        
        <input type="text" name="search" placeholder="Buscar por nombre" class="input-busqueda">
        
        <button type="submit" class="btn">Buscar</button>

        <a href="{{ route('categorias.pdf') }}" target="_blank" class="btn-consolidado">
         Ver reporte de categorias

        </a>

    </form>
    </div>
    
    @if ($categorias->isEmpty())
        <div class="alert alert-info text-center mt-3">
            <i class="fas fa-exclamation-circle"></i> No hay categorias registradas.
        </div>
    @else
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion ? $categoria->descripcion : 'Sin descripcion'}} </td>

                        <td>
                            <span class="badge {{ $categoria->estado ? 'badge-success' : 'badge-danger' }}">
                                {{ $categoria->estado ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class="acciones">
                            <div class="action-buttons">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="iconos bg-naranja">
                                    <span class="material-symbols-outlined">upgrade</span>
                                </a>
                                
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST"  class="form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="iconos btn-icono bg-rojo material-symbols-outlined">
                                        delete_forever
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection