<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('users.index',compact('usuarios'));
    }
}
