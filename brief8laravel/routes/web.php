<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});
Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::get('/register/inscription',[RegisterController::class,'create']);
Route::Post('/register/ajouterinscription',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index']);
Route::get('/login/connexion',[LoginController::class,'create']);
Route::Post('/login/connexionuser',[LoginController::class, 'store']);