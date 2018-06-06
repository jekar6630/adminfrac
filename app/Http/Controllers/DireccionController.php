<?php

namespace App\Http\Controllers;

use App\DireccionType;
use App\Lote;
use App\Manzana;
use App\Sector;
use Illuminate\Http\Request;
use App\Direccion;
use Illuminate\Support\Facades\DB;

class DireccionController extends Controller
{
    public function index(){
        $direcciones = Direccion::all();
        $tiposdirecciones = DB::table('direccion_types')->orderBy('name','asc')->get();
        $lotes = DB::table('lotes')->orderBy('name','asc')->get();
        $manzanas = DB::table('manzanas')->orderBy('name','asc')->get();
        $sectores = DB::table('sectors')->orderBy('name','asc')->get();
        return view('direcciones.index',compact('direcciones','tiposdirecciones','lotes','manzanas','sectores'));
    }

    public function show(Request $request){
        $direccion = Direccion::find($request->id);
        return response()->json(['direccion'=>$direccion]);
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'code' => 'required',
            'cvesae' => 'required',
            'calle' => 'required',
            'horario' => 'required',
            'tipo' => 'required',
            'lote' => 'required',
            'manzana' => 'required',
            'sector' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $direccion = new Direccion;
        $direccion->code = $request->get('code');
        $direccion->cvesae = $request->get('cvesae');
        $direccion->street = $request->get('calle');
        $direccion->schedule = $request->get('horario');
        $direccion->status = 1;
        $direccion->idType = $request->get('tipo');
        $direccion->idLot = $request->get('lote');
        $direccion->idApple = $request->get('manzana');
        $direccion->idSector = $request->get('sector');
        $direccion->save();

        return response()->json(['success'=>'La direccion se agrego correctamente']);
    }

    public function update(Request $request){
        $validator = \Validator::make($request->all(), [
            'code' => 'required',
            'cvesae' => 'required',
            'calle' => 'required',
            'horario' => 'required',
            'tipo' => 'required',
            'lote' => 'required',
            'manzana' => 'required',
            'sector' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $direccion = Direccion::find($request->get('idDireccion'));
        $direccion->code = $request->get('code');
        $direccion->cvesae = $request->get('cvesae');
        $direccion->street = $request->get('calle');
        $direccion->schedule = $request->get('horario');
        $direccion->status = 1;
        $direccion->idType = $request->get('tipo');
        $direccion->idLot = $request->get('lote');
        $direccion->idApple = $request->get('manzana');
        $direccion->idSector = $request->get('sector');
        $direccion->save();

        return response()->json(['success'=>'La direccion se actualizo correctamente']);
    }
}
