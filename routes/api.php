<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ExpulsionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alumnos',[AlumnoController::class,'alumnos']);
Route::get('/alumnos/{id}',[AlumnoController::class,'alumno'])->middleware('mi_middleware');
Route::delete('/alumnos/{id}',[AlumnoController::class,'delete'])->middleware('mi_middleware');
Route::post('/alumnos',[AlumnoController::class,'create']);
Route::put('/alumnos/{id}',[AlumnoController::class,'modificar'])->middleware('mi_middleware');


Route::get('/alumnos/{id}/clases',[AlumnoController::class,'clases'])->middleware('mi_middleware');
Route::get('/alumnos/{id}/expulsion',[AlumnoController::class,'expulsion'])->middleware('mi_middleware');
Route::get('/expulsion/{id}/alumnos',[ExpulsionController::class,'alumno'])->middleware('mi_middleware');
