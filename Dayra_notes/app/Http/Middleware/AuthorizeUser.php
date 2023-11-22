<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Http;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            $token = $request->header('Authorization');
            $authResponse = Http::withHeaders([
                'Authorization' => $token,
            ])
                ->get('http://127.0.0.1:8000/api/authorize');

            if (isset($authResponse['user_id'])) {
                $request->merge(['user_id' => $authResponse['user_id']]);
                return $next($request);
            } else {
                return response()->json(['error' => 'Unauthorized'], $authResponse->status());
            }

    }
}
