<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CheckinBookController;
use App\Http\Controllers\CheckoutBookController;
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

Route::post('/books', [BooksController::class, 'store']);
Route::patch('/books/{book}', [BooksController::class, 'update']);
Route::delete('/books/{book}', [BooksController::class, 'destory']);

Route::post('/author', [AuthorsController::class, 'store']);
Route::post('/checkout/{book}', [CheckoutBookController::class, 'store']);
Route::post('/checkin/{book}', [CheckinBookController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
