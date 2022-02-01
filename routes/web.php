<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroaprendizController;


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
    return view("auth.login");
});
Auth::routes();

Auth::routes(['verify'=>true]);

 //verificacion del correo electronico
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

//terminos y condiciones 
Route::get('/terminosCondiciones',[App\Http\Controllers\TerminosCondicionesController::class,'index']);
// entra a la plantilla de tecnoacademia
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

// Acceso al registro aprendiz,create,edit
Route::resource('aprendizregistro','RegistroaprendizController'); 

// Acceso a las autorizaciones
Route::get('pdf', [App\Http\Controllers\pdfController::class,'index'])->name('pdf');
Route::get('pdf1/pdf', 'pdfController@pdf1');

// Acceso a las Clausulas
Route::get('clausula', [App\Http\Controllers\clausulaController::class,'index'])->name('clausula');

Route::get('clausula1/clausula', 'clausulaController@clausula1');

