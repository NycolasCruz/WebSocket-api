<?php

use App\Http\Controllers\CounterController;
use Illuminate\Support\Facades\Route;

Route::post('/increment', [CounterController::class, 'increment']);
