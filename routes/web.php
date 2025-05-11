<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ClientController;

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/client', [ClientController::class, 'index']);
