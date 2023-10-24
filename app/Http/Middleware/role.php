<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user()->role == $role ) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'anda tidak memiliki akses ini');
    }
}
