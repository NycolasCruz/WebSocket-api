<?php

declare(strict_types=1);

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class CounterIncremented implements ShouldBroadcastNow

{
    public function broadcastOn(): Channel
    {
        return new Channel('Counter');
    }

    public function broadcastAs(): string
    {
        return 'CounterIncremented';
    }
}