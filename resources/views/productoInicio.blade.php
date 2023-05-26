@extends('layout/plantilla')

@section('tituloPagina', 'GUAYACAN - PRODUCTOS')

@section('contenido')

<div class="card">
    <h5 class="card-header">PRODUCTOS</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                
            </div>
        </div>
        <h5 class="card-title text-center">Listado de Productos</h5>
        <p>
            <a href="{{ route('productos.create') }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo producto
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id Producto</th>
                        <th>Id Tipo Producto</th>
                        <th>Descripcion</th>
                    
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->id_producto}}</td>
                            <td>{{ $item->id_tipoProducto }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                                <form action="{{ route('productos.edit', $item->id_producto) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('productos.show', $item->id_producto) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </p>
    </div>
</div>

@endsection 