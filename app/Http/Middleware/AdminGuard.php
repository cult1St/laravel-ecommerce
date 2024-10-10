<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class AdminGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->missing("adminonline")){
            return redirect(route("admin.login"));
        }else{
            return $next($request);
        }
    }
}
