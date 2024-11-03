<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User_TypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
//    public function handle(Request $request, Closure $next, $type): Response
//    {
////        return $next($request);
//        if(!Auth::check()){
//            return redirect()->route('login');
//        }
//        $user = Auth::user();
//        if ($user->user_type !==$type){
//            return redirect()->route('login');
//        }
//        return $next($request);
//    }
    public function handle($request, Closure $next, $type)
    {
        // بررسی اینکه آیا کاربر وارد شده است یا خیر
        if (!Auth::check()) {
            return redirect()->route('customer.dashboard'); // به صفحه ورود هدایت می‌شود
        }

        // دریافت نوع کاربر از مدل کاربر
        $user = Auth::user();

        // بررسی نوع کاربر
        if ($user->type_user !== $type) {
            return redirect()->route('home'); // به صفحه اصلی هدایت می‌شود
        }

        return $next($request);
    }


}
