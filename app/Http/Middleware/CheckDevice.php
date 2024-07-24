<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CheckDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $deviceIdentifier = $request->cookie('device_identifier');

        if (!$deviceIdentifier) {
            $deviceIdentifier = Str::random(40); // Generate a random identifier
            $cookie = cookie('device_identifier', $deviceIdentifier, 60 * 24 * 30); // Store for 30 days
            $response = $next($request);
            return $response->withCookie($cookie);
        }

        $request->session()->put('device_identifier', $deviceIdentifier);
        return $next($request);
    }
}
