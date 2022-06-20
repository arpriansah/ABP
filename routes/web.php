<?php

use App\Http\Controllers\AccountController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/loginregister', function () {
    return view('loginregist');
});
Route::get('/addData', function () {
    return view('addpage');
});
// Route::get('/updateData', function () {
//     return view('editpage');
// })->name('updateData');
Route::get('/updateData/{id}', [AccountController::class, 'showUpdateData'])->name('updateData');
Route::get('/admin', [AccountController::class, 'show'])->name('showData');