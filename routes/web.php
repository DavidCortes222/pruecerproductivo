<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController; 
use App\Http\Controllers\CotizaController; 
use App\Http\Controllers\CotizadorController;
use App\Http\Controllers\FluxometroController; 
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\OrganismoController;
use App\Http\Controllers\RegaderasController;
use App\Http\Controllers\ValvulasController;   
use App\Http\Controllers\RegistroController; 

//clase correo
use App\Mail\CotizadorMail;
//para correo
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomeController::class);

Route::get('index', HomeController::class);

Route::get('contacto', ContactoController::class);

Route::get('cotiza', CotizaController::class);

Route::get('cotizador', CotizadorController::class);

Route::get('fluxometros', FluxometroController::class);

Route::get('nosotros', NosotrosController::class);

Route::get('organismo', OrganismoController::class);

Route::get('regaderas', RegaderasController::class);

Route::get('valvulas', ValvulasController::class);

Route::get('registro', RegistroController::class); 

//para generar el pdf
//Route::get('cotizador/pdf', CotizadorController::class,'pdf');

//para mandar el formulario de cotizador y generar pdf
Route::post('cotizador', [CotizadorController::class,'pdf'])->name('cotizador.pdf');

//Controlador del contactanos
Route::post('index', [HomeController::class,'contactanos'])->name('index.contactanos');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('correoCotizacion', function () {
   
});

//Route::get('index', [HomeController::class, 'contactanos'])->name('index.contactanos');

