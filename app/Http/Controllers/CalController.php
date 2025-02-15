<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalController extends Controller
{
    public function index()
    {
        return view('cal');
    }

    public function add()
    {
        dd(request());
        $var = $num1 + $num2;
        return view('cal', compact('var'));
    }
}
