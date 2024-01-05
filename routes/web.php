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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/blog', [DashboardController::class, 'blog'])->middleware(['auth', 'verified'])->name('blog');
Route::get('/package', [DashboardController::class, 'package'])->middleware(['auth', 'verified'])->name('package');
Route::get('/checkout', [DashboardController::class, 'checkout'])->middleware(['auth', 'verified'])->name('checkout');
// route transaction
Route::post('/transaction', [TransactionController::class, 'store'])->middleware(['auth', 'verified'])->name('transaction');

require __DIR__.'/auth.php';
