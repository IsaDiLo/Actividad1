<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //crear funcion para llamar otro metodo view que se encarga de cargar otra vista 
    public function index(){
        return view('inicio');
    }
}
