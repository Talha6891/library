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

Route::middleware('auth')->group(function () {
    Route::get('search', function () {
        return view('borrow.search-bar');
    })->name('search');

    Route::resource('book', BookController::class);
    Route::get('book.pendingBook', [BookController::class, 'pendingBook'])->name('book.pendingBook');

    Route::resource('student', StudentController::class);
    Route::resource('borrow', BorrowController::class);
    Route::get('borrow.returnBook', [BorrowController::class, 'returnBook'])->name('borrow.returnBook');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['redirectIfAuthenticated'])->group(function () {
    Route::get('register_form', [AuthController::class, 'register_form'])->name('register_form');
    Route::get('login_form', [AuthController::class, 'login_form'])->name('login_form');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

