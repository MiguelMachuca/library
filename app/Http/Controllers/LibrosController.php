<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Favorito;
use App\Models\Categoria;
use App\Models\Idioma;
use Carbon\Carbon;


use Illuminate\Support\Facades\Storage;


class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return response()->json([
            'respuesta' => true,
            'libros' => $libros,
        ]);

        

    }
    

    public function almacenarLibro(){

        // Ruta del archivo en la carpeta public
        $filePath = public_path('libro7.pdf');

        // Lee el contenido del archivo
        $fileContent = file_get_contents($filePath);

        // Especifica la carpeta en la que deseas almacenar el archivo en S3
        $s3Folder = 'test';

        // Genera un nombre único para el archivo (puedes ajustar esto según tus necesidades)
        $fileName = uniqid() . '.pdf';

        // Almacena el archivo en S3
        Storage::disk('s3')->put($s3Folder . '/' . $fileName, $fileContent);

        // Obtén la URL del archivo almacenado en S3
        $url = Storage::disk('s3')->url($s3Folder . '/' . $fileName);
       
        $separados = explode("/", $url);
        $nombreLibro = $separados[count($separados)-1];
        // Puedes devolver la URL o realizar cualquier otra acción que necesites con el archivo almacenado en S3

        $libroNuevo = Libro::create([
            'nombre' =>$nombreLibro,
            'autor'=>"unknown",
            'categoria_id'=>2,
            'foto_portada'=>"https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-Los_viajes_de_Gulliver_wtxuhb.jpg",
            "descripcion"=>$url
        ]);
        return response()->json([
            "res"=>false,
            "mensaje" => $url,
            "nombre"=>$nombreLibro,
        ]);

}


public function descargarS3()
{
    // Especifica la carpeta en la que se encuentra el archivo en S3
    $s3Folder = 'test';
    $fileName="655101acef4da.pdf";

    // Genera la ruta completa del archivo en S3
    $filePath = $s3Folder . '/' . $fileName;

    // Descarga el contenido del archivo desde S3
    $fileContent = Storage::disk('s3')->get($filePath);

    // Establece las cabeceras para la descarga del archivo
    $headers = [
        'Content-Type' => 'application/octet-stream',
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ];

    // Devuelve la respuesta con el contenido del archivo y las cabeceras
    return response($fileContent, 200, $headers);
}

public function porCategoria($id){

    $libros = Libro::where('categoria_id',$id)->get();
    return response()->json([
        'respuesta'=>true,
        'libros_categorias' => $libros,
    ]);

}


public function mostrarCategorias(){
    $categorias = Categoria::get();
    return response()->json([
        'res'=>true,
        'categorias'=>$categorias
    ]);
}



public function mostrarLibro($id){
    $libro = Libro::find($id);
    return response()->json([
        'res'=>true,
        'libro'=>$libro,
    ]);
}


public function getIdiomas(){
    $idiomas = Idioma::get();
    return response()->json([
        'res'=>true,
        'idiomas'=>$idiomas,
    ]);
}


public function show($id)
{
    $libro = Libro::find($id);
    return response()->json([
        'res'=>true,
        'libro'=>$libro,
    ]);
}

}
