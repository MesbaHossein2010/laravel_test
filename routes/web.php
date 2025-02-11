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
});

Route::group(['prefix' => 'cal'], function () {

    Route::get("/", function () {
        return '<center style="font-size: 200px;"><a href="http://localhost:8000/">GO HOME</a></center>';
    });

    Route::get('/X/{num}/{num2}', function ($num, $num2) {
        $var = $num * $num2;
        return view("cal", compact('var'));
    })->where(['num', 'num2'], "[0-9]+");

    Route::get('/+2/{num}', function ($num) {
        $var = $num + 2;
        return view("cal", compact('var'));
    })->where('num', "[0-9]+");

});

Route::fallback(function () {
    return "<center style='font-size: 200px; color: red' >No domain like this <b style='color: #000000' >dummy</b></center>";
});
