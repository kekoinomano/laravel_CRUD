<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/empleado', function () {
    return view('empleado.index');
});
/* Con esta instruccion solo podría acceder a una sola ruta,
mientras que con la instruccion de abajo puedo acceder a todas las rutas dentro de la 
clase Empleado controller.
Route::get('empleado/create', [EmpleadoController::class, 'create']);
*/
Route::resource('empleado', EmpleadoController::class)->middleware('auth');

//Auth::routes(['register' => false, 'reset' => false]);
Auth::routes();
Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});
