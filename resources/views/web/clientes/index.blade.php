@extends('layouts.app')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/clientes/index.css') }}">
@endpush

<div class="container">
    <h2 class="tittle">Clientes</h2>
    
    <!-- Formulario de búsqueda -->
    <div class="form-busqueda-contenedor">
    <form method="GET" action="{{ route('clientes.index') }}" class="form-busqueda">
        <input type="text" name="search" placeholder="Buscar por cédula o nombre">
        <button type="submit">Buscar</button>
    </form>

        <a href="{{ route('web.pdf.clientes') }}" class="btn-crear">
        Consolidado
        </a>
    </div>

    @if ($clientes->isEmpty())
        <div class="alert alert-info text-center mt-3">
            <i class="fas fa-exclamation-circle"></i> No hay clientes registrados.
        </div>
    @else
        <div class="cliente-table-container">
            <table class="cliente-table">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->cedula }}</td>
                        <td>{{ $cliente->nombres }} {{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td>
                            <span class="badge {{ $cliente->estado ? 'badge-success' : 'badge-danger' }}">
                                {{ $cliente->estado ? 'Activo' : 'Inactivo' }}
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