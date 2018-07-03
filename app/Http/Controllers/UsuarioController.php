<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        $companias = DB::table('companias')->orderBy('name','asc')->get();
        $funciones = DB::table('funcions')->orderBy('name','asc')->get();
        return view('users.index',compact('usuarios','companias','funciones'));
    }

    public function listanegra(){
        $usuarios = User::where('idFunction',19)->get();
        $companias = DB::table('companias')->orderBy('name','asc')->get();
        $funciones = DB::table('funcions')->orderBy('name','asc')->get();
        return view('users.index',compact('usuarios','companias','funciones'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email1' => 'required',
            'email2' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'phone3' => 'required',
            'officephone' => 'required',
            'movil1' => 'required',
            'movil2' => 'required',
            'company' => 'required',
            'funcion' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $user = new User();
        $user->name = $request->get('fullname');
        $user->email = $request->get('email1');
        $user->email2 = $request->get('email2');
        $user->phone1 = $request->get('phone1');
        $user->phone2 = $request->get('phone2');
        $user->phone3 = $request->get('phone3');
        $user->officephone = $request->get('officephone');
        $user->movilphone1 = $request->get('movil1');
        $user->movilphone2 = $request->get('movil2');
        $user->idCompany = $request->get('company');
        $user->idFunction = $request->get('funcion');
        $user->password = '-';
        $user->urlfoto = '-';
        $user->status = 1;
        $user->save();

        return response()->json(['success'=>'El usuario se registro correctamente']);
    }

    public function show(Request $request){
        $user = User::find($request->id);
        return response()->json(['usuario'=>$user]);
    }

    public function update(Request $request){

        $validator = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email1' => 'required',
            'email2' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'phone3' => 'required',
            'officephone' => 'required',
            'movil1' => 'required',
            'movil2' => 'required',
            'companyu' => 'required',
            'funcionu' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $user = User::find($request->get('idUsuario'));
        $user->name = $request->get('fullname');
        $user->email = $request->get('email1');
        $user->email2 = $request->get('email2');
        $user->phone1 = $request->get('phone1');
        $user->phone2 = $request->get('phone2');
        $user->phone3 = $request->get('phone3');
        $user->officephone = $request->get('officephone');
        $user->movilphone1 = $request->get('movil1');
        $user->movilphone2 = $request->get('movil2');
        $user->idCompany = $request->get('companyu');
        $user->idFunction = $request->get('funcionu');
        $user->save();

        return response()->json(['success'=>'El usuario se actualizo correctamente']);
    }

    public function updatephoto(Request $request){

        $validator = \Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with(['errors'=>$validator->errors()->all()]);
        }

        $image = $request->file('photo');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/fotos');
        $image->move($destinationPath, $input['imagename']);

        $user = User::find($request->get('idUsuarioPhoto'));
        $user->urlfoto = $input['imagename'];
        $user->save();

        return back()->with('success','Image Upload successful');

    }
}
