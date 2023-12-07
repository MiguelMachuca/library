<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Google\Cloud\Translate\V2\TranslateClient;
use Google\Cloud\Translate\V2\Translation;

class AudioLibrosController extends Controller
{
    public function convertir(Request $request){
        $nombre=$request['nombre'];
        $lenguaje=$request['lenguaje'];
        $texto = $request['texto'];
        $response = Http::get('https://api-voz9.onrender.com/synthesize/'.$lenguaje.'/'.$nombre.'/'.$texto); 
        if ($response->successful()) {
            $body = $response->getBody();
            $bodyContents = $body->getContents();
            return response()->json([
                'res'=>true,
                'audio'=>$bodyContents,
            ]);
            
        } else {
           
            $statusCode = $response->status();
            return response()->json([
                'res'=>false,
                'codigo'=>$statusCode,
            ]);
        
        }
       
    }

    public function libroAPdf(Request $request){
         
           $archivoPDF = $request->file('archivo');
           if ($archivoPDF) {
               
            try{
                $contenido = file_get_contents($archivoPDF);
                $codificacionOriginal = mb_detect_encoding($contenido);

                 $contenidoUTF8 = mb_convert_encoding($contenido, 'UTF-8', $codificacionOriginal);
                $translate = new TranslateClient([
                    'key' => 'AIzaSyDbrsMnt0l8kEsAfJoLYDOWxhLqTlkEIWY', // Reemplaza con tu clave API de Google Cloud
                ]);
 
                $idiomaOrigen = 'es'; // Por ejemplo, español
                $idiomaDestino = 'en'; // Por ejemplo, inglés
    
 
                $traduccion = $translate->translate($contenidoUTF8, [
                    'source' => $idiomaOrigen,
                    'target' => $idiomaDestino,
                ]);
    
               
                return response()->json([
                 'res'=>true,
                 'datos'=>$traduccion['text'],
                ]);
            }catch(\Exception $e){
                return response()->json([
                    'res'=>true,
                    'datos'=>"ERROR EN GOOGLE: ".$e->getMessage(),
                   ]);
            }    
           } else {
            return response()->json([
                'res'=>true,
                'datos'=>"No hay libro",
               ]);
           }
       }
           
        
    
    
}
