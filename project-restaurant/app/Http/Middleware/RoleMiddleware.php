<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string $role): Response
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        if(Auth::user()->role!==$role)
        {
            abort(403,'شما اجازه دسترسی به این بخش را ندارید');
        }
        return $next($request);
    }
}
