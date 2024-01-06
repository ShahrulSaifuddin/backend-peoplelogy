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
})->name('home');

//{id} from route then $id is a parameter value route the use it to pass the value into ID variable  to be use in hte about page
Route::get('/about/{id}', function (string $id) {
    return view('about', [
        'ID' => $id
    ]);
})->whereNumber('id')->name('about');
