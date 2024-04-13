<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientRegistrationController;

Route::get('/', [ClientRegistrationController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientRegistrationController::class, 'create'])->name('clients.create');
Route::get('/clients/{client}/edit', [ClientRegistrationController::class, 'edit'])->name('clients.edit');

Route::post('/clients', [ClientRegistrationController::class, 'store'])->name('clients.store');

Route::put('/clients/{client}', [ClientRegistrationController::class, 'update'])->name('clients.update');

Route::delete('/clients/{client}', [ClientRegistrationController::class, 'destroy'])->name('clients.destroy');