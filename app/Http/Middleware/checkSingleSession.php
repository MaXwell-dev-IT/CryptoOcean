<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DeviceSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class checkSingleSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // $sessionId = session()->getId();
        // $deviceId = request()->header('User-Agent');
        // $deviceSession = DeviceSession::where('session_id', $sessionId)
        // ->where('device_id', $deviceId)
        // ->first();
        // if (!$deviceSession) {
        //     return redirect()->back();
        // }
        // return $next($request);
    }
}
