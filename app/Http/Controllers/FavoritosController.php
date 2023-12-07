<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;
use Carbon\Carbon;

class FavoritosController extends Controller
{
    
    public function addFavorites(Request $request){
        $nuevoLibro = Favorito::create([
            'libro'=>$request['libro'],
            'user_id'=>$request['user_id'],
            'fecha'=>Carbon::now(),
        ]);
        return response()->json([
            'res'=>true,
            'mensaje'=>'Se añadio con exito a Tus Favoritos',
        ]);
    }



    public function misFavoritos($id){
        // return response()->json([
        //     'res'=>true,
        //     "favoritos"=>'funciona desde favoritos'
        // ]);
        $favoritos = Favorito::where('user_id',$id)->get();
        return response()->json([
            'res'=>true,
            'favoritos'=>$favoritos,
        ]);
    }
    
}
