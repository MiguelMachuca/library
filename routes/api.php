<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\VocesController;
use App\Http\Controllers\SuscripcionesController;
use App\Http\Controllers\AudioLibrosController;
use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/crearUser',[UsersController::class,'store']);
//Route::get('/getUser',[UsersController::class,'index']);
Route::get('/getCategorias',[LibrosController::class,'mostrarCategorias']);
Route::post('/login',[UsersController::class,'loguearse']);

// -------------------------------------------------------------------------
// ---------------------------RUTAS VALIDAD SW1-----------------------------
// -------------------------------------------------------------------------

Route::get('/idiomas',[IdiomasController::class,'getIdiomas']);
Route::get('getVoces/{id}',[VocesController::class,'index']);
// Route::get('/getLibroEspecifico/{id}',[LibrosController::class,'mostrarLibro']);
Route::get('/getLibros',[LibrosController::class,'index']);
Route::get('/getLibrosPorCategorias/{id}',[LibrosController::class,'porCategoria']);
Route::get('/getLibroEspecifico/{id}',[LibrosController::class,'mostrarLibro']);
Route::get('/getMisFavoritos/{id}',[FavoritosController::class,'misFavoritos']);                     
Route::post('/agregarFavorito',[FavoritosController::class,'addFavorites']);
Route::post('/suscribir',[SuscripcionesController::class,'realizarSuscripcion']);


Route::post('/traducir',[AudioLibrosController::class,'convertir']);
Route::post('/translatePDF',[AudioLibrosController::class,'libroAPdf']);

// Route::get('/descargar',[LibrosController::class,'descargarS3']);




// -------------------------------------------------------------------------
// ---------------------------RUTAS VALIDAD SW1--------------------------------
// -------------------------------------------------------------------------


Route::get('/subirLibro',[LibrosController::class,'almacenarLibro']);
