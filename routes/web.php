<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
