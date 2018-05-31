<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lote;

class LoteController extends Controller
{
    public function index(){
        $lotes = Lote::all();
        return view('lotes.index',compact('lotes'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'namelote' => 'required',
            'descriptionlote' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $lote = new Lote();
        $lote->name = $request->get('namelote');
        $lote->description = $request->get('descriptionlote');
        $lote->status = 1;
        $lote->save();

        return response()->json(['success'=>'El lote se registro correctamente']);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'namelote' => 'required',
            'descriptionlote' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $lote = Lote::find($request->get('idLote'));
        $lote->name = $request->get('namelote');
        $lote->description = $request->get('descriptionlote');
        $lote->save();

        return response()->json(['success'=>'El lote se actualizo correctamente']);
    }

    public function show(Request $request){
        $lote = Lote::find($request->id);
        return response()->json(['lote'=>$lote]);
    }
}
