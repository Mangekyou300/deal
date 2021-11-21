<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
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

// Route::get('/', function () {
//     return view('deal.dashboard');
// });

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('perfil')->group(function() {
        Route::get('create', [PerfilController::class, 'create'])->name('perfil.create');
        Route::get('show/{perfil}', [PerfilController::class, 'show'])->name('perfil.show');
        Route::post('storeProfessional', [PerfilController::class, 'storeProfessional'])->name('perfil.storeProfessional');
    });

    Route::view('vagas', 'deal.vagas')->name('vagas');

    Route::view('candidaturas', 'deal.candidaturas')->name('candidaturas');

    ROute::view('vaga_de_emprego', 'deal.vaga_de_emprego')->name('vaga_de_emprego');
});
