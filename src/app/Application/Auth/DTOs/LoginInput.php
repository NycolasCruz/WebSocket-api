<?php

declare(strict_types=1);

namespace App\Application\Auth\DTOs;

readonly class LoginInput
{
    public function __construct(
        public string $email,
        public string $password
    ) {
    }
}
