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
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Dirección</th>
                        <th>Fecha Nacimiento</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

@endsection
