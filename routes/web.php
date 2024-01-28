<?php

use App\Http\Controllers\StatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('stats/',[StatController::class,'getStats']);
