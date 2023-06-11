<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

    Route::get('/my-ads', [HomeController::class, 'profile'])->name('my-ads');

    Route::get('/settings', [HomeController::class, 'profile'])->name('settings');

    Route::get('/ad-performance', [HomeController::class, 'adperformance'])->name('ad-performance');

    Route::get('/affiliate-marketting', [HomeController::class, 'affiliate'])->name('affiliate-marketting');

    Route::get('/sell', [HomeController::class, 'sell'])->name('sell');

    Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');

    Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
