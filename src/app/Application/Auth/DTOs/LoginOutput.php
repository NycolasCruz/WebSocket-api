<?php

declare(strict_types=1);

namespace App\Application\Auth\DTOs;

readonly class LoginOutput
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email
    ) {
    }
}
