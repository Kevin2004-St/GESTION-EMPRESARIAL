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
            <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required>
            @error('nombres')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" required>
            @error('apellidos')
            <span class="invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
             @error('email')
             <span class="invalid-feedback">{{ $message }}</span>
             @enderror
        </div>

        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular') }}" required>
            @error('celular')
            <span class="invalid-feedback">{{ $message }} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" required>
            @error('direccion')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value=" {{ old('fecha_nacimiento') }}" required>
            @error('fecha_nacimiento')
            <span class="invalid-feedback">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="estado">Activo</label>
            <input type="checkbox" name="estado" value="1" class="form-check-input" >
        </div>

        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
</div>


@endsection
