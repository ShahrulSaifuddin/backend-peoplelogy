<?php

use App\Http\Controllers\TaskController;
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
});

Route::controller(TaskController::class)->group(function () {

    Route::get('/task', 'show')->name('task');

    Route::get('/task/create', 'create')->name('task.create');

    Route::get('/task/delete', 'delete')->name('task.delete');
});
