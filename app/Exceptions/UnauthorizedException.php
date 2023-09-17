<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class UnauthorizedException extends Exception
{
    public function render($request)
    {
        return new JsonResponse(['message' => 'Unauthorized'], 401);
    }
}
