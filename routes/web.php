<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

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


Route::resource('articles', ArticleController::class);

Route::get('/', [ArticleController::class, 'index']);
Route::post('/articles/{article}/increment-stock', [ArticleController::class, 'incrementStock'])->name('articles.increment-stock');