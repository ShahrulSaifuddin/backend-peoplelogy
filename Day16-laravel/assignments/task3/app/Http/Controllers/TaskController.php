<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function show(): View
    {
        return view('Task.index');
    }

    public function create(): View
    {
        return view('Task.create');
    }

    public function delete(): View
    {
        return view('Task.delete');
    }
}
