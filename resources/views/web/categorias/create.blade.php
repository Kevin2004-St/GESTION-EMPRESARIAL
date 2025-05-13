@extends('layouts.app')

@section('content')
@push('styles')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

@endpush

<div class="container">
    <div class="form-container-estrecho">
        <h2 class="form-title">Registrar nueva categoria</h2>
        
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            @method('POST')

            
            <div class="form-row">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"
                    oninput="this.value = this.value.toUpperCase();" required>
                    @error('nombre')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" rows="4" 
                    oninput="this.value = this.value.toUpperCase();">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            
            <div class="form-row">
      
                <div class="form-check-group">
                    <label for="estado">Activo</label>
                    <input type="checkbox" id="estado" name="estado" class="form-check-input">
                </div>

            </div>
            
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection