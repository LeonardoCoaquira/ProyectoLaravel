<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books');
Route::get('/books/book/{route}', [App\Http\Controllers\BookController::class, 'showBook']);
Route::get('/books/cover/{route}', [App\Http\Controllers\BookController::class, 'getCover']);
Route::post('/uploadBook', [App\Http\Controllers\BookController::class, 'uploadBook'])->name('uploadBook');
Route::post('/deleteBook', [App\Http\Controllers\BookController::class, 'deleteBook'])->name('deleteBook');
Route::post('/uploadReview', [App\Http\Controllers\BookController::class, 'uploadReview'])->name('uploadReview');