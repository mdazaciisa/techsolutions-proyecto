<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Log;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = session('jwt_token') ?? $request->cookie('jwt_token');
        
        if (!$token) {
            return redirect()->route('login')->with('error', 'Por favor inicia sesión.');
        }

        try {
            JWTAuth::setToken($token);
            $user = JWTAuth::authenticate();
            
            if (!$user) {
                return redirect()->route('login')->with('error', 'Token inválido.');
            }
        } catch (JWTException $e) {
            return redirect()->route('login')->with('error', 'Tu sesión ha expirado.');
        }

        return $next($request);
    }
}