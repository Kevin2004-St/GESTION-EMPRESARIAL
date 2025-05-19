@extends('layouts.app')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

<div class="container">
    <h2 class="tittle">Productos</h2>
    
    <!-- Formulario de búsqueda -->
      <!-- Formulario de búsqueda -->
      <div class="form-busqueda-contenedor">
    <form method="GET" action="{{ route('productos.index') }}" class="form-busqueda">
        
        <input type="text" name="search" placeholder="Buscar por nombre" class="input-busqueda">
        
        <button type="submit" class="btn">Buscar</button>

        <a href="{{ route('productos.pdf') }}" target="_blank" class="btn-consolidado">
            Consolidado
        </a>

    </form>
    </div>
    
    @if ($productos->isEmpty())
        <div class="alert alert-info text-center mt-3">
            <i class="fas fa-exclamation-circle"></i> No hay productos registrados.
        </div>
    @else
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio Unitario</th>
                        <th>Stock</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion ? $producto->descripcion : 'Sin descripción'  }} </td>
                        <td>$&nbsp;{{ number_format($producto->precio_unitario, 0, '.' , '.') }}</td>
                        <td>{{ $producto->stock ? $producto->stock: 'Sin unidades' }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>

                        <td>
                            <span class="badge {{ $producto->estado ? 'badge-success' : 'badge-danger' }}">
                                {{ $producto->estado ? 'Disponible' : 'No Disponible' }}
                            </span>
                        </td>
                        <td class="acciones">
                            <div class="action-buttons">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="iconos bg-naranja">
                                    <span class="material-symbols-outlined">upgrade</span>
                                </a>
                                
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"  class="form">
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