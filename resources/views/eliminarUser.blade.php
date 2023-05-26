@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar un Usuario!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar el Usuario!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                    
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password}}</td>
                            
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('user.index') }}" class="btn btn-info" >
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