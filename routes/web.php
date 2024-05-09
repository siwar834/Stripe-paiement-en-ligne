<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::post('/charge', [PaymentController::class, 'charge']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [PaymentController::class, 'index']);


