@extends('layouts.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
@endpush
<div class="container">
    <h2>Registrar Cliente</h2>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" class="form-control" required>
            @error('nombres')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control">
        </div>

        <div class="form-group">
            <label for="estado">Activo</label>
            <input type="checkbox" name="estado" value="1" class="form-check-input">
        </div>

        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
</div>


@endsection
