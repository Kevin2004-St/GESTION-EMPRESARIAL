<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [ClienteController::class, 'index'])->name('home');

Route::prefix('clientes')->group(function(){

    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/' , [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/destroy/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});