<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class Authenticate extends Middleware
{
   
    protected function redirectTo($request)
    {
        return $request->expectsJson()
            ? new JsonResponse(['message' => 'User not authenticated'], 401)
            : abort(401, 'User not authenticated');
    }
    
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }
}
