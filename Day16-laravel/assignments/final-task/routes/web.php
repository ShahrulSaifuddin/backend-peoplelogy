<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::controller(BookController::class)->group(function () {

    Route::get('/book', 'show')->name('book');

    Route::get('/book/create', 'create')->name('book.create');

    Route::get('/book/edit', 'edit')->name('book.edit');

    Route::get('/book/delete', 'delete')->name('book.delete');
});
