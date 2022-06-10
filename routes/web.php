<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/register',[PageController::class,'createUser'])->name('register');
Route::post('/register',[PageController::class,'create'])->name('submitUser');
Route::get('/login',[PageController::class,'login'])->name('login');
Route::post('/login',[PageController::class,'validateLogin'])->name('loginValidate');
Route::get('/userDashbord',[PageController::class,'userDashbord'])->name('userDashBord');
Route::get('/details/{id}',[PageController::class,'getDetails'])->name('details');
Route::get('/adminDashbord',[PageController::class,'adminDashbord'])->name('adminDashBord');
