<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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
    return view('welcome');
});


// DetailsCancel 
Route::get('/productos',[ProductosController::class, 'index'])->name('productos');
Route::post('/insertar',[ProductosController::class, 'store'])->name('insertar');
Route::post('/filtro',[ProductosController::class, 'filtro'])->name('filtro');
Route::post('/filtro_pro',[ProductosController::class, 'filtro_producto'])->name('filtro_pro');
Route::post('/actualizar',[ProductosController::class, 'update'])->name('actualizar_venta');
Route::delete('/destroy/{id}',[ProductosController::class, 'destroy'])->name('destroy');



// Route::get('/edetailscancel/{venta}','DetailsCancelController@edita');
// Route::post('/edetailscancel','DetailsCancelController@update')->name('edit');
// Route::post('/detailscancel','DetailsCancelController@filtro')->name('filtro');

