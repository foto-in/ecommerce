<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorductController;

Route::middleware(['every-request'])->group(function (){
    Route::get('/product', [PorductController::class, 'getAllProduct']);
});
