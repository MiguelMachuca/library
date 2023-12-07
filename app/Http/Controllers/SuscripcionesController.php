<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;
use App\Models\User;

class SuscripcionesController extends Controller
{
    //

    public function realizarSuscripcion(Request $request){
        $sucripcion =Suscripcion::create([
            'nombre'=>$request['nombre'],
            'monto'=>$request['monto'],
            'estado'=>1,
        ]);
    
        $user = User::find($request['user_id'])->first();
        $user->update([
            'suscripcion_id'=>$request['suscripcion_id'],
        ]);
        // $user->save();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Suscripcion Exitosa',
        ]);
    }
}
