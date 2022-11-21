<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'getBooks']);
Route::get('/book/{id}', [BookController::class, 'getBookDetail']);
Route::get('/category/{id}', [CategoryController::class, 'getCategory']);
Route::get('/publisher', [PublisherController::class, 'getPublishers']);
Route::get('/publisher/{id}', [PublisherController::class, 'getPublisherDetail']);
Route::get('/contact', function () {
    return view('contact');
});
