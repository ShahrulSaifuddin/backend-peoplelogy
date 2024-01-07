<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function showHome(): View
    {
        return view('welcome');
    }

    public function showUsers(): View
    {
        return view('Users.index', [
            'users' => [
                1 => ['name' => 'john', 'city' => 'chicago'],
                2 => ['name' => 'anna', 'city' => 'new york'],
                3 => ['name' => 'mike', 'city' => 'texas'],
            ]
        ]);
    }
}
