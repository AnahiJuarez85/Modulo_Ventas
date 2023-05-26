<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    
    public function index()
    {
        //pagina de inicio 
        $datos = Productos::orderBy('descripcion', 'desc')->paginate(3);
        return view('productoInicio', compact('datos'));
    }

    public function create()
    {
        //el formulario donde 
        //nosotros agregamos datos
        return view('agregarProductos');
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $productos = new Productos();
        $productos->id_producto = $request->post('id_producto');
        $productos->id_tipoProducto = $request->post('id_tipoProducto');
        $productos->descripcion  = $request->post('descripcion');
        
        $productos->save();

        return redirect()->route("productos.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $productos = Productos::find($id);
        return view("eliminarProductos" , compact('productos'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $productos = Productos::where('id_producto', $id)->first();

        return view("actualizarProductos" , compact('productos'));
        
    }


    public function update(Request $request, $id)
{
    // Este método actualiza los datos en la base de datos
    $productos = Productos::where('id_producto', $id)->first();
    $productos->descripcion = $request->post('descripcion');
    
    $productos->save();

    return redirect()->route("productos.index")->with("success", "¡Actualizado con éxito!");
}


    public function destroy($id)
    {
        $productos = Productos::find($id);
        $productos->delete();
        return redirect()->route("productos.index")->with("success", "Eliminado con exito!");
    }
}