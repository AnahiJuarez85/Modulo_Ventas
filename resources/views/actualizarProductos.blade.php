@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar nuevo producto</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('productos.update', $productos->id_producto) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Id Producto</label>
                <input type="text" name="id_producto" class="form-control" required value="{{$productos->id_producto}}">
                <label for="">Id Tipo de Producto</label>
                <input type="text" name="id_tipoProducto" class="form-control" required value="{{$productos->id_tipoProducto}}">
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" required value="{{$productos->descripcion}}">
                <br>
                <a href="{{ route('productos.index') }}" class="btn btn-info" >
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
