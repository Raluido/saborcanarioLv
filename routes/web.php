<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ICalController;
use App\Http\Controllers\SocialLoginController;

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

// RUTAS GET
Route::get('/', [GeneralController::class, 'showHome']);
Route::get('/register', [UserController::class, 'showRegister']);
Route::get('/showgoogleform', [SocialLoginController::class, 'showGoogleForm']);
Route::get('/google/auth', [SocialLoginController::class, 'registerGoogle']);
Route::get('/testemail', [UserController::class, 'testEmail']);
Route::get('/verificateemail/{code}', [UserController::class, 'verifiedEmail']);
Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/formuserdata', [UserController::class, 'showFormUserData']);
Route::get('/showRoom/calculatePrice/{board}/{guests}/{idRoom}/{startDate}/{endDate}', [ReservationController::class, 'calculatePrice']);
Route::get('/showRoom/{idRoom}/{startDate}/{endDate}/', [RoomController::class, 'showRoom']);


//RUTAS POST
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/formuserdata', [UserController::class, 'setFormUserData']);
Route::post('/registergoogle', [SocialLoginController::class, 'registerGoogle']);
Route::post('/room', [RoomController::class, 'showAvailability']);
Route::post('/showRoom/{idRoom}', [ReservationController::class, 'reserve']);




