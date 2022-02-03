@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar una Carta Magic</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('carta_magics.update', $cartaMagic->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="titulo" class="col-md-4 col-form-label text-md-end">
                                Título
                            </label>
                            <input  
                                type="text" 
                                class="form-control @error('titulo') is-invalid @enderror" 
                                name="titulo" 
                                value="{{ old('titulo') }}" 
                                required 
                                autocomplete="titulo" 
                                autofocus
                            >

                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="tipo" class="col-md-4 col-form-label text-md-end">
                                Tipo
                            </label>
                            <input  
                                type="text" 
                                class="form-control @error('tipo') is-invalid @enderror" 
                                name="tipo" 
                                value="{{ old('tipo') }}" 
                                required 
                                autocomplete="tipo" 
                                autofocus
                            >

                            @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="email_creador" class="col-md-4 col-form-label text-md-end">
                                Email del creador
                            </label>
                            <input  
                                type="email" 
                                class="form-control @error('email_creador') is-invalid @enderror" 
                                name="email_creador" 
                                value="{{ old('email_creador') }}" 
                                autocomplete="email_creador" 
                                autofocus
                            >

                            @error('email_creador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">
                                Imagen
                            </label>
                            <input  
                                type="file" 
                                class="form-control @error('imagen') is-invalid @enderror" 
                                name="imagen" 
                            >

                            @error('imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">
                                Descripción
                            </label>
                            <textarea
                                class="form-control @error('descripcion') is-invalid @enderror" 
                                name="descripcion" 
                            ></textarea>

                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Editar cartica
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
