<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        //pagina de inicio 
        $datos = User::orderBy('email', 'desc')->paginate(3);
        return view('inicioUser', compact('datos'));
    }

    public function create()
    {
        //el formulario donde 
        //nosotros agregamos datos
        return view('agregarUser');
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $user = new User();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = $request->post('password');
        
        $user->save();

        return redirect()->route("user.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $user = User::find($id);
        return view("eliminarUser" , compact('user'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $user = User::find($id);
        return view("actualizarUser" , compact('user'));
        
    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = $request->post('password');
        $user->save();

        return redirect()->route("user.index")->with("success", "Actualizado con exito!");
        
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route("user.index")->with("success", "Eliminado con exito!");
    }
}