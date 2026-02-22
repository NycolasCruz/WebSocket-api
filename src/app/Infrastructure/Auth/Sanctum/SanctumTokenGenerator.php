<?php

declare(strict_types=1);

namespace App\Infrastructure\Auth\Sanctum;

use App\Application\Auth\Contracts\TokenGeneratorInterface;
use App\Models\User as UserModel;

class SanctumTokenGenerator implements TokenGeneratorInterface
{
    public function generate(int $userId): string
    {
        $user = UserModel::findOrFail($userId);

        return $user
            ->createToken('api-token')
            ->plainTextToken;
    }
}
