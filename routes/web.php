<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalController;
use App\Http\Controllers\TestController;

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

Route::resource('/ResourceTest', TestController::class);

Route::get('/cal', [CalController::class, 'index']);

Route::post('/cal', [CalController::class, 'calculate']);



Route::fallback(function () {
    return "<center style='font-size: 200px; color: red' >No domain like this <b style='color: #000000' >dummy</b></center>";
});
