<?php

use App\Http\Controllers\CandidaturasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\VagasController;
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

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('perfil')->group(function() {

        Route::get('create', [PerfilController::class, 'create'])->name('perfil.create');
        Route::get('show/{perfil?}', [PerfilController::class, 'show'])->name('perfil.show');
        Route::post('store', [PerfilController::class, 'store'])->name('perfil.store');
    });

    Route::prefix('vagas')->group(function() {

        Route::get('/', [VagasController::class, 'index'])->name('vagas');
        Route::get('/create', [VagasController::class, 'create'])->name('vagas.create');
        Route::get('show/{vaga?}', [VagasController::class, 'show'])->name('vagas.show');
        Route::post('store', [VagasController::class, 'store'])->name('vagas.store');
    });

    Route::prefix('candidaturas')->group(function() {

        Route::get('/', [CandidaturasController::class, 'index'])->name('candidaturas');
    });


});
