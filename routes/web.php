<?php

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
    return view('deal.dashboard');
});

Auth::routes();

Route::view('/dashboard', 'deal.dashboard')->name('home');

Route::view('/perfil', 'deal.perfil_user')->name('perfil_user');

Route::view('/perfil/2', 'deal.perfil_contractor')->name('perfil_contractor');

Route::view('vagas', 'deal.vagas')->name('vagas');
