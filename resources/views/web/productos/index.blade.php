@extends('layouts.app')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

<div class="container">
    <h2 class="tittle">Productos</h2>
    
    <!-- Formulario de búsqueda -->
    <div class="form-busqueda-contenedor">
    <form method="GET" action="{{ route('productos.index') }}" class="form-busqueda">
        <input type="text" name="search" placeholder="Buscar por nombre">
        <button type="submit">Buscar</button>
    </form>

        <a href="{{ route('web.pdf.productos') }}" class="btn-consolidado">
        Consolidado
        </a>
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
                        <th>Email</th>
                        <th>Precio Unitario</th>
                        <th>Stock</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }} </td>
                        <td>{{ $producto->precio_unitario }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->estado }}</td>

                        <td>
                            <span class="badge {{ $producto->estado ? 'badge-success' : 'badge-danger' }}">
                                {{ $producto->estado ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class="acciones">
                            <div class="action-buttons">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="iconos bg-naranja">
                                    <span class="material-symbols-outlined">upgrade</span>
                                </a>
                                
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"  class="form">
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