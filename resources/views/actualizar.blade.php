@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar nueva persona</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{$personas->paterno}}">
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$personas->direccion}}">
                <label for="">Teléfono</label>
                <input type="text" name="telefono" class="form-control" required value="{{$personas->telefono}}">
                <label for="">Profesión</label>
                <input type="text" name="profesion" class="form-control" required value="{{$personas->profesion}}">
                <label for="">Asociado</label>
                <input type="text" name="asociado" class="form-control" required value="{{$personas->asociado}}">

                <br>
                <a href="{{ route('personas.index') }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection
