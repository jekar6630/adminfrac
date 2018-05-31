<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcion;

class FuncionController extends Controller
{
    public function index(){
        $funciones = Funcion::all();
        return view('funciones.index',compact('funciones'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'namefuncion' => 'required',
            'descriptionfuncion' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $funcion = new Funcion();
        $funcion->name = $request->get('namefuncion');
        $funcion->description = $request->get('descriptionfuncion');
        $funcion->status = 1;
        $funcion->save();

        return response()->json(['success'=>'La funcion se registro correctamente']);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'namefunction' => 'required',
            'descriptionfunction' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $funcion = Funcion::find($request->get('idFuncion'));
        $funcion->name = $request->get('namefunction');
        $funcion->description = $request->get('descriptionfunction');
        $funcion->save();

        return response()->json(['success'=>'La funcion se actualizo correctamente']);
    }

    public function show(Request $request){
        $funcion = Funcion::find($request->id);
        return response()->json(['funcion'=>$funcion]);
    }
}
