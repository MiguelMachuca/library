<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idioma;
use App\Models\Favorito;
use Carbon\Carbon;

class IdiomasController extends Controller
{

    public function getIdiomas(){
        $idiomas = Idioma::get();
        return response()->json([
            'res'=>true,
            'idiomas'=>$idiomas,
        ]);
    }


}
