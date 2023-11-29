<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AssociationController;
use App\Http\Controllers\Auth\LoginAssociationController;


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
Route::get('/register/user',[RegisterController::class,'create']);
Route::Post('/register/ajouterinscription',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index']);
Route::get('/login/connexion',[LoginController::class,'create']);
Route::Post('/login/connexionuser',[LoginController::class, 'store']);

Route::get('/associationregister',[AssociationController::class,'index'])->name('assregister');
Route::get('register/association',[AssociationController::class,'create']);
Route::Post('register/ajouterassociation',[AssociationController::class,'store']);

Route::get('/loginassociation',[LoginAssociationController::class,'index']);
Route::get('/login/association',[LoginAssociationController::class,'create']);
Route::Post('/login/connexionassociation',[LoginAssociationController::class, 'store']);

Route::get('/newevenement', [EvenementController::class, 'create']);
Route::post('/addevenement', [EvenementController::class, 'store']);

Route::get('/evenements/listeevenements', [EvenementController::class, 'index']);

Route::get('/evenements/{id}',[EvenementController::class,'shows']);