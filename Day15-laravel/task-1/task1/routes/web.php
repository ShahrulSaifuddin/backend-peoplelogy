<?php

use Illuminate\Support\Facades\Route;

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
})->name('nav');

Route::get('/home', function () {
    return view('home', [
        'homeData' => 'Hello World'
    ]);
})->name('home');

Route::get('/about/{name}', function (string $name) {
    return view('about', [
        'aboutData' => $name
    ]);
})->name('about');

Route::get('/contact/{num?}', function (int $num) {
    return view('contact', [
        'contactData' => $num
    ]);
})->name('contact');
