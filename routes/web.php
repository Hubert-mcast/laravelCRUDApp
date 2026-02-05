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

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::get('/menus/{id}', [MenuController::class, 'show'])->name('menus.show');
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');

Route::get('/dishes', [DishController::class, 'index'])->name('dishes.index');
Route::get('/dishes/create', [DishController::class, 'create'])->name('dishes.create');
Route::get('/dishes/{id}', [DishController::class, 'show'])->name('dishes.show');
Route::post('/dishes', [DishController::class, 'store'])->name('dishes.store');
Route::get('/dishes/{id}/edit', [DishController::class, 'edit'])->name('dishes.edit');
Route::put('/dishes/{id}', [DishController::class, 'update'])->name('dishes.update');
Route::delete('/dishes/{id}', [DishController::class, 'destroy'])->name('dishes.destroy');

Route::get('/wines', [WineController::class, 'index'])->name('wines.index');
Route::get('/wines/create', [WineController::class, 'create'])->name('wines.create');
Route::get('/wines/{id}', [WineController::class, 'show'])->name('wines.show');
Route::post('/wines', [WineController::class, 'store'])->name('wines.store');
Route::get('/wines/{id}/edit', [WineController::class, 'edit'])->name('wines.edit');
Route::put('/wines/{id}', [WineController::class, 'update'])->name('wines.update');
Route::delete('/wines/{id}', [WineController::class, 'destroy'])->name('wines.destroy');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');