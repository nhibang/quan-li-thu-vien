<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/manageusers', function () {
    return view('manageUsers');
});

/*manageusers là đuôi của trang quản lý người dùng */

Route::get('/viewBook', function () {
    return view('viewBook');
});

Route::get('/addBook', function () {
    return view('addBook');
});

Route::get('/deleteBook', function () {
    return view('deleteBook');
});

Route::get('/introduce', function () {
    return view('introduce');
});


Route::get('/manageBook', function () {
    return view('manageBook');
});


Route::get('/classification', function () {
    return view('classification');
});
