<?php

use App\Http\Controllers\Api\v1\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::controller(ArticleController::class)->group(function(){
    Route::get('articles', 'list');
    Route::get('articles/{article}', 'show');
});
