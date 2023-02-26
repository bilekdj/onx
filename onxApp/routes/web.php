<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

// Trasy dla klientów
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
//Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store')->middleware('custom_middleware');
//Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update')->middleware('custom_middleware');;
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

