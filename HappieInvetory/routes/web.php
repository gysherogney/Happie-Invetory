<?php

use App\Http\Controllers\AuthController;
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

Route::get('/',[AuthController::class,'UserLogin'])->middleware('guest')->name('login');
Route::post('/',[AuthController::class,'UserLogin'])->middleware('guest')->name('login');
Route::get('/register',[AuthController::class,'RegisterUser'])->middleware('guest')->name('register');
Route::post('/register',[AuthController::class,'RegisterUser'])->middleware('guest')->name('register');
