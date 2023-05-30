<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Route;

// Routes accessible to unauthenticated users
// Route::middleware('guest')->group(function () {
    Route::get('register_form', [AuthController::class, 'register_form'])->name('register_form');
    Route::get('login_form', [AuthController::class, 'login_form'])->name('login_form');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
// });

// show if user is not registered
Route::get('authenticate', [AuthController::class, 'registerOrLoginForm'])->name('authenticate')->middleware('checkIfAuthenticated');

// Routes protected by authentication middleware
Route::middleware('redirectIfNotAuthenticated')->group(function () {
    Route::get('search', function () {
        return view('borrow.search-bar');
    })->name('search');

    // Home route
    Route::get('/', function () {
        return view('layout.quotes');
    })->name('/');

    Route::resource('book', BookController::class);
    Route::get('book.pendingBook', [BookController::class, 'pendingBook'])->name('book.pendingBook');
    Route::resource('student', StudentController::class);
    Route::resource('borrow', BorrowController::class);
    Route::get('borrow.returnBook', [BorrowController::class, 'returnBook'])->name('borrow.returnBook');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Routes for showing pieChart
    Route::get('/getChartData', [ChartController::class, 'getChartData'])->name('getChartData');
});
