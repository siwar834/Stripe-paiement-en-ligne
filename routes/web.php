<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\OpenAIController;

Route::post('/generate-image', [OpenAIController::class, 'generateImage']);
// routes/web.php
Route::view('/generate-image', 'generate_image');

Route::get('/', function () {
    return view('welcome');
});
