<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Events\CounterIncremented;

class CounterController extends Controller
{
    public function increment()
    {
        broadcast(new CounterIncremented());

        return response()->json([
            'success' => true
        ]);
    }
}