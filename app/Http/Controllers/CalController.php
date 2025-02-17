<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalController extends Controller
{
    public function index()
    {
        return view('cal');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $symbol = $request->input('symbol');

        if (!empty($num1) || !empty($num2) || $num1 == 0 || $num2 == 0) {

            if ($symbol == '+') {
                $sum = $num1 + $num2;
            } elseif ($symbol == '-') {
                $sum = $num1 - $num2;
            } elseif ($symbol == '*') {
                $sum = $num1 * $num2;
            } elseif ($symbol == '/') {
                if ($request->all()['num2'] == '0') {
                    $sum = 'cant divide by zero';
                } else {
                    $sum = $num1 / $num2;
                }
            } else {
                $sum = "please fill all fields";
                $symbol = ',';
            }
        } else {
            $sum = "please fill all fields";
        }

        return view('cal', compact('sum', 'num1', 'num2', 'symbol'));
    }
}
