<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {

        if (auth()->check()&& auth()->user()->role===$role){
            return $next($request);
        }
        return redirect()->route('home')->with('error','شما اجازه دسترسی به این مسیر را ندارید');
    }
}
