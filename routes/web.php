<?php

use App\Http\Controllers\CustomerController;
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



Route::get('/customers',[CustomerController::class,'index'])->name('customers.index');
Route::get('/customers/create',[CustomerController::class,'create'])->name('customers.create');
Route::post('/customers/create',[CustomerController::class,'store']);
Route::get('/customers/edit/{id}',[CustomerController::class,'edit'])->name('customers.edit');
Route::post('/customers',[CustomerController::class,'update']);
Route::get('/customers/{id}',[CustomerController::class,'destroy']);



