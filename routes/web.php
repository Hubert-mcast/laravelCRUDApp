<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WineController;

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

Route::resource('menus', MenuController::class);
Route::resource('dishes', DishController::class);
Route::resource('wines', WineController::class);
Route::resource('reviews', ReviewController::class);

Route::get('/write-review', [ReviewController::class, 'createPublic'])->name('reviews.public.create');
Route::post('/write-review', [ReviewController::class, 'storePublic'])->name('reviews.public.store');