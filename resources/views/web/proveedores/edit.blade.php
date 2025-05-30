@extends('layouts.app')

@section('content')
@push('styles')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

@endpush

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Editar proveedor</h2>
        
        <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $proveedor->nombre }}" required>
                    @error('nombre')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                       
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $proveedor->email }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">

                <div class="form-group">
                    <label for="contacto">Contacto</label>
                    <input type="text" name="contacto" class="form-control @error('contacto') is-invalid @enderror" value="{{ $proveedor->contacto }}" required>
                    @error('contacto')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group full-width">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ $proveedor->direccion }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('direccion')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-check-group">
                <label for="estado">Activo</label>
                <input type="checkbox" id="estado" name="estado" class="form-check-input" @if($proveedor->estado) checked @endif >
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection