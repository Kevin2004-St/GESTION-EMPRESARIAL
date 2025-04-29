@extends('layouts.app')

@section('content')
@push('styles')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

@endpush

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Registrar Producto</h2>
        
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('nombre')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="precio_unitario">Precio Unitario</label>
                    <input type="number" name="precio_unitario" class="form-control @error('precio_unitario') is-invalid @enderror" value="{{ old('precio_unitario') }}" 
                    step="0.001"
                    required>
                    @error('precio_unitario')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" 
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('stock')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" rows="3" value="{{ old('descripcion') }}" 
                    oninput="this.value = this.value.toUpperCase();"></textarea>
                    @error('descripcion')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection