<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        // Check if user is logged in
        if (!$user) {
            abort(403, 'Unauthorized - You are not logged in.');
        }

        // Make sure User model uses HasRoles trait from Spatie
        if (!$user->hasAnyRole($roles)) {
            abort(403, 'Unauthorized - You do not have the required role.');
        }

        return $next($request);
    }
}
