<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class indexController extends Controller
{public function index()
    {
        //pagina de inicio 
       
        return view('PaginaInicio');
    }
}