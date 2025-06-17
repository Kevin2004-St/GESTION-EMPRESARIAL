<?php

use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Categoria\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Pdf\PdfController;
use App\Http\Controllers\Producto\ProductoController;
use App\Http\Controllers\Proveedor\ProveedorController;
use App\Models\Categorias;
use App\Models\Producto;
use App\Models\Proveedor;
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

Route::middleware(['auth', 'verified'])->group(function(){

    //RUTA DE BIENVENIDA
    Route::get('/home', [IndexController::class, 'home'])->name('home');

    Route::get('/verify-otp',[OtpController::class, 'showVerifyForm'])->name('otp-verify.form');
    Route::post('/verify-otp',[OtpController::class, 'verify' ])->name('otp.verify');

    
    //RUTAS PDF
    Route::prefix('pdf')->group(function(){

        Route::get('/clientes/pdf', [PdfController::class, 'clientes'])->name('clientes.pdf');
        Route::get('/productos/pdf', [PdfController::class, 'productos'])->name('productos.pdf');
        Route::get('/categorias/pdf', [PdfController::class, 'categorias'])->name('categorias.pdf');
        Route::get('/proveedores/pdf', [PdfController::class, 'proveedores'])->name('proveedores.pdf');

    });

    //RUTAS CLIENTES
    Route::prefix('clientes')->group(function(){

        Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
        Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
        Route::post('/' , [ClienteController::class, 'store'])->name('clientes.store');
        Route::get('/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
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

    //RUTAS CATEGORIAS
    Route::prefix('categorias')->group(function() {

        Route::get('/', [CategoriaController::class, 'index'])->name('categorias.index');
        Route::get('/create', [CategoriaController::class, 'create'])->name('categorias.create');
        Route::post('/', [CategoriaController::class, 'store'])->name('categorias.store');
        Route::get('/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
        Route::put('/{id}', [CategoriaController::class,'update'])->name('categorias.update');
        Route::delete('/{id}', [CategoriaController::class,'destroy'])->name('categorias.destroy');
        
    });

    //RUTAS PROVEEDORES
    Route::prefix('proveedores')->group(function(){

        Route::get('/', [ProveedorController::class, 'index'])->name('proveedores.index');
        Route::get('/create', [ProveedorController::class, 'create'])->name('proveedores.create');
        Route::post('/', [ProveedorController::class, 'store'])->name('proveedores.store');
        Route::get('/{id}', [ProveedorController::class, 'edit'])->name('proveedores.edit');
        Route::put('/{id}', [ProveedorController::class, 'update'])->name('proveedores.update'); 
        Route::delete('/{id}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');

    });


});


