<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/loginregister', [AccountController::class, 'postlogin'])->name('postlogin');
Route::post('/register', [AccountController::class, 'register'])->name('register');
Route::post('/addData', [AccountController::class, 'add'])->name('addData');
Route::post('/updateData/{id}', [AccountController::class, 'update'])->name('updateData');