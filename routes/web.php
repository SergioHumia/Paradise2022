<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RealizaController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes/pdf', [App\Http\Controllers\ClienteController::class, 'pdf'] )->name('clientes.pdf');
Route::get('viajes/pdf',   [App\Http\Controllers\ViajeController::class, 'pdf'] )->name('viajes.pdf');
Route::get('reservas/pdf', [App\Http\Controllers\ReservaController::class, 'pdf'] )->name('reservas.pdf');
Route::get('realizas/pdf', [App\Http\Controllers\RealizaController::class, 'pdf'] )->name('realizas.pdf');

Route::resource('/clientes', ClienteController::class);
Route::resource('/viajes', ViajeController::class);
Route::resource('/reservas', ReservaController::class);
Route::resource('/realizas', RealizaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/send-email', [MailController::class, 'sendEmail']);
