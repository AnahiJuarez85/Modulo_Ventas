@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo Producto</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <label for="">id producto</label>
                <input type="text" name="id_producto" class="form-control" required>
                <label for="">id tipo Producto</label>
                <input type="text" name="id_tipoProducto" class="form-control" required>
                <label for="">descripcion</label>
                <input type="text" name="descripcion" class="form-control" required>
                <br>
                <a href="{{ route('productos.index') }}" class="btn btn-info" >
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
