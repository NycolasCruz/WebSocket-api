<?php

declare(strict_types=1);

namespace App\Application\Auth\UseCases;

use App\Application\Auth\DTOs\LoginInput;
use App\Application\Auth\DTOs\LoginOutput;
use App\Domain\Exceptions\UnauthorizedOperationException;
use App\Domain\User\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class LoginUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function execute(LoginInput $dto): LoginOutput
    {
        $user = $this->userRepository->findByEmail($dto->email);

        if (!$user || !Hash::check($dto->password, $user->password)) {
            throw new UnauthorizedOperationException('Credenciais inválidas');
        }

        return new LoginOutput(
            id: $user->id,
            name: $user->name,
            email: $user->email
        );
    }
}
