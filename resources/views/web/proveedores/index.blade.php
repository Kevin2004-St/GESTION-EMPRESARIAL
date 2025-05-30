@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="tittle">Proveedores</h2>
    
    <!-- Formulario de búsqueda -->
    <div class="form-busqueda-contenedor">
    <form method="GET" action="{{ route('proveedores.index') }}" class="form-busqueda">
        
        <input type="text" name="search" placeholder="Buscar por nombre..." class="input-busqueda">
        
        <button type="submit" class="btn">Buscar</button>

        <a href="{{ route('clientes.pdf') }}" target="_blank" class="btn-consolidado">
            Ver reporte de proveedores
        </a>

    </form>
    </div>


    @if ($proveedores->isEmpty())
        <div class="alert alert-info text-center mt-3">
            <i class="fas fa-exclamation-circle"></i> No hay proveedores registrados.
        </div>
    @else
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Contacto</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->email }} </td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>
                            <span class="badge {{ $proveedor->estado ? 'badge-success' : 'badge-danger' }}">
                                {{ $proveedor->estado ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class="acciones">
                            <div class="action-buttons">
                                <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="iconos bg-naranja">
                                    <span class="material-symbols-outlined">upgrade</span>
                                </a>
                                
                                <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST"  class="form">
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