<?php

use App\Http\Controllers\BmiController;
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

Route::get('/', [BmiController::class, 'index'])->name('home');
Route::get('/success/{id}', [BmiController::class, 'success'])->name('success');
Route::post('/hitung', [BmiController::class, 'store'])->name('hitung');
