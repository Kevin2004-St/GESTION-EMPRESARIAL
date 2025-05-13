@extends('layouts.app')

@section('content')
@push('styles')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

@endpush

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Registrar nuevo cliente</h2>
        
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="form-row">
                <div class="form-group">
                    <label for="cedula">Cédula</label>
                    <input type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{ old('cedula') }}" required>
                    @error('cedula')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('nombres')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('apellidos')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular') }}" required>
                    @error('celular')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento') }}" required>
                    @error('fecha_nacimiento')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group full-width">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" 
                oninput="this.value = this.value.toUpperCase();" required>
                @error('direccion')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-check-group">
                <label for="estado">Activo</label>
                <input type="checkbox" id="estado" name="estado" class="form-check-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection