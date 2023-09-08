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

Route::get('/',[AuthController::class,'logininterface'])->name('login');
Route::post('/newuser',[AuthController::class,'newuser'])->name('welcome');
Route::post('/login',[AuthController::class,'UserLogin'])->name('userlogin');
// Route::post('/register',[AuthController::class,'RegisterUser'])->name('register');
// Route::get('/register',[AuthController::class,'registration'])->name('register');

