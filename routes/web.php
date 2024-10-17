<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
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

// Route::get('/', function () {
//     return view('layout.layout');
// });

Route::get('/', function () {
    return view('user.dashboard');
})->name('home');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/dashboard', [UserController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard/register', [UserController::class, 'store'])->name('dashboard.register.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit'); // Rute untuk mengedit pengguna
Route::get('/dashboard/edit/{id}', [UserController::class, 'edit'])->name('dashboard.edit'); // Rute untuk mengedit di dashboard
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Route::resource('reviews', ReviewController::class);
Route::get('/reviews/index', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/update/{id}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');




