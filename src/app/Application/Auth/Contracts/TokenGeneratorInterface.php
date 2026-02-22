<?php

declare(strict_types=1);

namespace App\Application\Auth\Contracts;

interface TokenGeneratorInterface
{
    public function generate(int $userId): string;
}
