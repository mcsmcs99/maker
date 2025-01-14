<?php

use App\Http\Controllers\SegmentController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Users routes
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/user', [UserController::class, 'user'])->name('user');

// Token
Route::post('/get-token', [TokenController::class, 'getToken'])->name('getToken');
