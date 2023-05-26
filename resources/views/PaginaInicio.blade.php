@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Inicio</h5>
    <div class="card-body">
        
        <div class="banner_img">
        <img src="micope.png" alt="">
         </div>
      
    <div class="container mt-3">
        <div class="row" style="margin: auto; height: 100%">
  
        <div class="card col-lg-4" >
            <img class="card-img-top" src="https://img.icons8.com/?size=512&id=37913&format=png" alt="Card image" style="width:100%">
            <div class="card-body">
            <h4 class="card-title">Usuarios</h4>
            <p class="card-text">Modulos de Usuarios</p>
            <a href="{{ route('user.index') }}" class="btn btn-primary">Ir</a>
            </div>
        </div>

        <div class="card col-lg-4" >
            <img class="card-img-top" src="https://img.icons8.com/?size=512&id=32747&format=png">
            <div class="card-body">
            <h4 class="card-title">Productos</h4>
            <p class="card-text">Modulos de Productos</p>
            <a href="{{ route('productos.index') }}" class="btn btn-primary">Ir</a>
            </div>
        </div>

        <div class="card col-lg-4" >
            <img class="card-img-top" src="https://img.icons8.com/?size=512&id=nrEFWOZ9YrxK&format=png" alt="Card image" style="width:100%">
            <div class="card-body">
            <h4 class="card-title">Clientes</h4>
            <p class="card-text">Modulos de Clientes</p>
            <a href="{{ route('personas.index') }}" class="btn btn-primary">Ir</a>
            </div>
        </div>

                
            </div>
     
        
    </div>
</div>
@endsection