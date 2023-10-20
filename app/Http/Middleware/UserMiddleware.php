<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->status) {
            if (Auth::user()->status == "1") {
                $banned = Auth::user()->status == "1";
                Auth::logout();
                if ($banned == 1) {
                    $message='your account is blocked';
                }
            }         
            return redirect()-> route('login')
            ->with('status' , $message);
            
        }
        return $next($request);
    }
}
