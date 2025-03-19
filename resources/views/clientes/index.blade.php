@extends('layouts.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

<div class="container">
    <h2>Lista de Clientes</h2>
    
    @if ($clientes->isEmpty())
        <div class="alert alert-info text-center mt-3">
            <i class="fas fa-exclamation-circle"></i> No hay clientes registrados.
        </div>
    @else
        <div class="table-container"> <!-- Contenedor más grande -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Fecha Nacimiento</th>
                            <th>Estado</th>
                            <th class="acciones">Acciones</th> <!-- Espacio para los iconos -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->cedula }}</td>
                            <td>{{ $cliente->nombres }} {{ $cliente->apellidos }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->celular }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->fecha_nacimiento }}</td>
                            <td>
                                <span class="badge {{ $cliente->estado ? 'badge-success' : 'badge-danger' }}">
                                    {{ $cliente->estado ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td class="acciones"> 

                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="iconos bg-naranja">
                             <span class="material-symbols-outlined">upgrade</span>
                            </a>
                            
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="iconos btn-icono bg-rojo  material-symbols-outlined">
                                    delete_forever
                                </button>
                            </form>

                            </td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>

@endsection
