<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ExampleController::class, 'index']);

