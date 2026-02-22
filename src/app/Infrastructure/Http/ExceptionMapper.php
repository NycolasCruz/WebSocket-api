<?php

declare(strict_types=1);

namespace App\Infrastructure\Http;

use App\Domain\Exceptions\DomainException;
use App\Domain\Exceptions\ResourceNotFoundException;
use App\Domain\Exceptions\UnauthorizedOperationException;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Throwable;

class ExceptionMapper
{
    public static function map(Throwable $e): array
    {
        return match (true) {

            $e instanceof UnauthorizedOperationException => [
                'status' => HttpResponse::HTTP_UNAUTHORIZED,
                'message' => $e->getMessage(),
            ],

            $e instanceof ResourceNotFoundException => [
                'status' => HttpResponse::HTTP_NOT_FOUND,
                'message' => $e->getMessage(),
            ],

            $e instanceof DomainException => [
                'status' => HttpResponse::HTTP_UNPROCESSABLE_ENTITY,
                'message' => $e->getMessage(),
            ],

            default => [
                'status' => HttpResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => 'Internal Server Error',
            ],
        };
    }
}
