<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Index\IndexController;
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

    //RUTAS CLIENTES
    Route::prefix('clientes')->group(function(){

        Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
        Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
        Route::post('/' , [ClienteController::class, 'store'])->name('clientes.store');
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
        Route::put('/{id}', [ClienteController::class, 'update'])->name('clientes.update');
        Route::delete('/destroy/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    });    

});


