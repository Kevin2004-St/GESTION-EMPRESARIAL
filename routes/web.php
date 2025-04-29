<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Pdf\PdfController;
use App\Http\Controllers\Producto\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){

    //RUTA DE BIENVENIDA
    Route::get('/home', [IndexController::class, 'home'])->name('home');

    //RUTAS PDF
    Route::prefix('pdf')->group(function(){

        Route::get('/clientes/pdf', [PdfController::class, 'clientes'])->name('web.pdf.clientes');
        Route::get('/productos-pdf/', [PdfController::class, 'productos'])->name('web.pdf.productos');



    });

    //RUTAS CLIENTES
    Route::prefix('clientes')->group(function(){

        Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
        Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
        Route::post('/' , [ClienteController::class, 'store'])->name('clientes.store');
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
        Route::put('/{id}', [ClienteController::class, 'update'])->name('clientes.update');
        Route::delete('/destroy/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    });    


    //RUTAS PRODUCTOS
    Route::prefix('productos')->group(function() {

        Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
        Route::get('/create', [ProductoController::class, 'create'])->name('productos.create');
        Route::post('/', [ProductoController::class, 'store'])->name('productos.store');
        Route::get('/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
        Route::put('/{id}', [ProductoController::class, 'update'])->name('productos.update');
        Route::delete('/{id}', [ProductoController::class , 'destroy'])->name('productos.destroy');


    });

});


