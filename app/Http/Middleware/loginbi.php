<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user_model;
use Illuminate\Auth\Events\Login;

class loginbi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    // public function handle(Request $request, Closure $next)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('loginbi');
    //     }
    // }

}
