<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manzana;

class ManzanaController extends Controller
{
    public function index(){
        $manzanas = Manzana::all();
        return view('manzanas.index',compact('manzanas'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'namemanzana' => 'required',
            'descriptionmanzana' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $manzana = new Manzana();
        $manzana->name = $request->get('namemanzana');
        $manzana->description = $request->get('descriptionmanzana');
        $manzana->status = 1;
        $manzana->save();

        return response()->json(['success'=>'La manzana se registro correctamente']);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'namemanzana' => 'required',
            'descriptionmanzana' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $manzana = Manzana::find($request->get('idManzana'));
        $manzana->name = $request->get('namemanzana');
        $manzana->description = $request->get('descriptionmanzana');
        $manzana->save();

        return response()->json(['success'=>'La manzana se actualizo correctamente']);
    }

    public function show(Request $request){
        $manzana = Manzana::find($request->id);
        return response()->json(['manzana'=>$manzana]);
    }
}
