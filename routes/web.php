<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/practice', [PublicController::class, 'practice'])->name('practice');

Route::get('/about_us', [PublicController::class, 'about_us'])->name('about_us');

Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::get('/practice_detail/{id}', [PublicController::class, 'practice_detail'])->name('practice_detail');

Route::get('/about_us_detail/{id}', [PublicController::class, 'about_us_detail'])->name('about_us_detail');