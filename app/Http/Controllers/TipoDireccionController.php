<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DireccionType;

class TipoDireccionController extends Controller
{
    public function index(){
        $tiposdirecciones = DireccionType::all();
        return view('tiposdirecciones.index',compact('tiposdirecciones'));
    }
}
