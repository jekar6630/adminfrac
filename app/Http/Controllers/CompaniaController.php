<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compania;

class CompaniaController extends Controller
{
    public function index(){
        $companias = Compania::all();
        return view('companias.index',compact('companias'));
    }

    public function show(Request $request){
        $compania = Compania::find($request->id);
        return response()->json(['compania'=>$compania]);
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'namecompany' => 'required',
            'callecompany' => 'required',
            'telefono1compania' => 'required',
            'telefono2compania' => 'required',
            'emailcompania' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $compania = new Compania();
        $compania->name = $request->get('namecompany');
        $compania->street = $request->get('callecompany');
        $compania->phone1 = $request->get('telefono1compania');
        $compania->phone2 = $request->get('telefono2compania');
        $compania->email = $request->get('emailcompania');
        $compania->status = 1;
        $compania->save();

        return response()->json(['success'=>'La compania se registro correctamente']);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'namecompany' => 'required',
            'callecompany' => 'required',
            'telefono1compania' => 'required',
            'telefono2compania' => 'required',
            'emailcompania' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $compania = Compania::find($request->get('idCompania'));
        $compania->name = $request->get('namecompany');
        $compania->street = $request->get('callecompany');
        $compania->phone1 = $request->get('telefono1compania');
        $compania->phone2 = $request->get('telefono2compania');
        $compania->email = $request->get('emailcompania');
        $compania->save();

        return response()->json(['success'=>'La compania se actualizo correctamente']);
    }
}
