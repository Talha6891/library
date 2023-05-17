<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowController;
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
    return view('layout.quotes');
})->name('/');

Route::middleware(['redirectIfAuthenticated'])->group(function () {

    Route::get('register_form', [\App\Http\Controllers\AuthController::class, 'register_form'])->name('register_form');
    Route::get('login_form', [\App\Http\Controllers\AuthController::class, 'login_form'])->name('login_form');
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function (){

Route::get('search', function () {
    return view('borrow.search-bar');
})->name('search');

Route::resource('book',\App\Http\Controllers\BookController::class);
Route::get('book.pendingBook', [\App\Http\Controllers\BookController::class, 'pendingBook'])->name('book.pendingBook');
Route::resource('student',\App\Http\Controllers\StudentController::class);
Route::resource('borrow',\App\Http\Controllers\BorrowController::class);
Route::get('borrow.returnBook', [\App\Http\Controllers\BorrowController::class, 'returnBook'])->name('borrow.returnBook');

// Routes for logout
Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});


