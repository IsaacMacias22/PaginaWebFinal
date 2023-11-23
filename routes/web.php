<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\VistasUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('Index');


Route::get('/login', [LoginController::class, 'index'])->name('LoginIndex'); //Mandar llamar formulario de logeo

Route::post('/login', [LoginController::class, 'store'])->name('LoginStore');

Route::get('/muro', [MuroController::class, 'index'])->name('MuroIndex');

Route::post('/logout', [LogoutController::class, 'store'])->name('LogoutStore');

Route::get('/registro', [RegistroController::class, 'index'])->name('RegistroIndex');

Route::post('/registro', [RegistroController::class, 'store'])->name('RegistroStore');


Route::get('/categorias', [CategoriasController::class, 'index'])->name('CategoriasIndex');

Route::get('/categorias/create', [CategoriasController::class, 'create'])->name('CategoriasCreate');

Route::post('/categorias', [CategoriasController::class, 'store'])->name('CategoriasStore');

Route::get('categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('CategoriasEdit');

Route::patch('categorias/{categoria}', [CategoriasController::class, 'update'])->name('CategoriasUpdate');

Route::delete('categorias/{categoria}', [CategoriasController::class, 'destroy'])->name('CategoriasDestroy');


Route::get('/productos', [ProductosController::class, 'index'])->name('ProductosIndex');

Route::get('/productos/create', [ProductosController::class, 'create'])->name('ProductosCreate');

Route::post('/productos', [ProductosController::class, 'store'])->name('ProductosStore');

Route::get('productos/{producto}/edit', [ProductosController::class, 'edit'])->name('ProductosEdit');

Route::patch('productos/{producto}', [ProductosController::class, 'update'])->name('ProductosUpdate');

Route::delete('productos/{producto}', [ProductosController::class, 'destroy'])->name('ProductosDestroy');


Route::get('/inicio', [VistasUser::class, 'inicio_index'])->name('InicioIndex');
Route::get('/nosotros', [VistasUser::class, 'nosotros_index'])->name('NosotrosIndex');
Route::get('/productosvista', [VistasUser::class, 'productos_index'])->name('ProductosVistaIndex');
Route::get('/contacto', [VistasUser::class, 'contacto_index'])->name('ContactoIndex');
