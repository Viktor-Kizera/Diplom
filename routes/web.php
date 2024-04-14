<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\UserController;

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

Route::middleware('guest')->group(function () {
    Route::get('/authorization', [AuthorizationController::class, 'index'])->name('login');
    Route::post('/authorization/register', [AuthorizationController::class, 'register']);
    Route::post('/authorization/login', [AuthorizationController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/authorization/success', [AuthorizationController::class, 'success']);
    Route::get('/home', [AuthorizationController::class, 'home']);
    Route::get('/home/avatar', [UserController::class, 'avatar']);
    Route::post('/home/avatar', [UserController::class, 'saveAvatar']);
    Route::get('/home/set-avatar/{avatar}', [UserController::class, 'setAvatar']);
});

Route::get('/', [IndexController::class, 'index']);

Route::get('/movie/{movieId}', [MovieController::class, 'show']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/for-child', [MovieController::class, 'forChild']);
