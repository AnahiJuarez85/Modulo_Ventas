@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo Usuario</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control" required>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
                <label for="">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
                <br>
                <a href="{{ route('user.index') }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection
