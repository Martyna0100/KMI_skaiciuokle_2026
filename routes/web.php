<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [CalculatorController::class, 'index'])->name('calculator.index');
Route::get('/calculator')->name('result');

Route::post('/skaiciuok', function (Illuminate\Http\Request $request) {
    global $sura;
    $sura = $request->weight / ($request->height * $request->height);
    return view('results');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

