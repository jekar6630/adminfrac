<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector;

class SectorController extends Controller
{
    public function index(){
        $sectores = Sector::all();
        return view('sectores.index',compact('sectores'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'namesector' => 'required',
            'descriptionsector' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $sector = new Sector();
        $sector->name = $request->get('namesector');
        $sector->description = $request->get('descriptionsector');
        $sector->status = 1;
        $sector->save();

        return response()->json(['success'=>'El sector se registro correctamente']);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'namesector' => 'required',
            'descriptionsector' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $sector = Sector::find($request->get('idSector'));
        $sector->name = $request->get('namesector');
        $sector->description = $request->get('descriptionsector');
        $sector->save();

        return response()->json(['success'=>'El sector se actualizo correctamente']);
    }

    public function show(Request $request){
        $sector = Sector::find($request->id);
        return response()->json(['sector'=>$sector]);
    }
}
