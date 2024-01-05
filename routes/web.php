<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/blog', [DashboardController::class, 'blog'])->name('blog');
Route::get('/package/{id}', [DashboardController::class, 'package'])->middleware(['auth', 'verified'])->name('package');
Route::get('/checkout/{id}', [DashboardController::class, 'checkout'])->middleware(['auth', 'verified'])->name('checkout');
// route transaction
Route::post('/transaction', [TransactionController::class, 'store'])->middleware(['auth', 'verified'])->name('transaction');

require __DIR__.'/auth.php';
