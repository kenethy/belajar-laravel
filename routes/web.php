<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class,'index']);
