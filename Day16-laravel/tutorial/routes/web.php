<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'showHome'])
    ->name('home');

// Route::get('/users', function () {
//     $name = 'shahrul';
//     $city = 'Kuala Lumpur';
//     $users = [
//         1 => ['name' => 'john', 'city' => 'chicago'],
//         2 => ['name' => 'anna', 'city' => 'new york'],
//         3 => ['name' => 'mike', 'city' => 'texas'],
//     ];
//     return view('users', [
//         'name' => $name,
//         'city' => $city,
//         'users' => $users
//     ]);
// })->name('users');

Route::get('/users', [PageController::class, 'showUsers'])
    ->name('users');
