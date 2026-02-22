<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Repositories;

use App\Domain\User\Entities\User;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Models\User as UserModel;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail(string $email): ?User
    {
        $model = UserModel::where('email', $email)->first();

        if (!$model) {
            return null;
        }

        return new User(
            id: $model->id,
            name: $model->name,
            email: $model->email,
            password: $model->password
        );
    }
}
