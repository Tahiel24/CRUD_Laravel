<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'index'] );  //Esta linea indica: cuando la ruta '/' se solicita busco al metodo llamado 'index' del controlador AlumnoController

//Esta linea crea rutas para index, create,store, edit,update, destroy,etc presentes en el controlador de alumnos.
Route::resource('alumnos', AlumnoController::class);
