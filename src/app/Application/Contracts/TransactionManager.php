<?php

declare(strict_types=1);

namespace App\Application\Contracts;

interface TransactionManager
{
    public function run(callable $callback): mixed;
}
