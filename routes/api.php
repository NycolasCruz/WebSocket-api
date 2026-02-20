<?php

use App\Http\Controllers\CounterController;

Route::post('/increment', [CounterController::class, 'increment']);
