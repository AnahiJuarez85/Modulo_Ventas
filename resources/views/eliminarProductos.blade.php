@extends('layout/plantilla')

@section("tituloPagina", "Eliminar Producto")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar un producto!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este producto!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Id Producto</th>
                        <th>Id Tipo de Producto</th>
                        <th>Descripcion</th>
                    
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $productos->id_producto }}</td>
                            <td>{{ $productos->id_tipoProducto }}</td>
                            <td>{{ $productos->descripcion}}</td>
                            
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('productos.destroy', $productos->id_producto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('productos.index') }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection