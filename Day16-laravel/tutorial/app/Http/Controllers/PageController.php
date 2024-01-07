<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{

    public function showHome(): View
    {
        return view('welcome');
    }

    public function showUsers(): View
    {
        return view('users', [
            'name' => 'shahrul'
        ]);
    }
}
