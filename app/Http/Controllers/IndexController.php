<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected function index()
    {
        return view('index');
    }
}
