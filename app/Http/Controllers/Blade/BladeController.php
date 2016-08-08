<?php

namespace App\Http\Controllers\Blade;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BladeController extends Controller
{
    public function extends()
    {
    	return view('blade/child');
    }

    public function data()
    {
    	return view('blade/data');
    }
}
