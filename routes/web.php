<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('customers.index');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::post('logout', [LogoutController::class, 'store'])->name('logout');

// Rutas para el crud

Route::middleware('auth')->controller(CustomerController::class)->group(function(){

    Route::get('customers', 'index')->name('customers.index');
    Route::get('getCustomers', 'getCustomers')->name('customers.getCustomers');

    Route::get('/customers/create', 'create')->name('customers.create');
    Route::get('customers/{customer}', 'show')->name('customers.show');
    Route::post('customers', 'store')->name('customers.store');
    Route::get('customers/{customer}/edit', 'edit')->name('customers.show');

    Route::put('customers/{customer}', 'update')->name('customers.update');
    Route::delete('customers/{customer}', 'destroy')->name('customers.destroy');
});
