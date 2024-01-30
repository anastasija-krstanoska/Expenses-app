<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Token
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next)
    {

        $request->headers->set("Accept", "application/json");
        if ($request->has('api_token')) {
            $request->headers->set('Authorization', $request->get('api_token'));
        }
        $user = User::whereToken($request->headers->get('authorization'))->first();
        if ($user && $user->token != null) {
            Auth::login($user);
            return $next($request);
        }
        return response()->json(['status' => false, 'message' => __('Unauthenticated'), 'token' => true, 'error' => 401], 401);
    }
}
