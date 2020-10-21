<?php

use Illuminate\Support\Facades\Route;
use Sfneal\Healthy\Controllers\HealthyController;

/*
|--------------------------------------------------------------------------
| Health Check Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('health', HealthyController::class)->name('health');
