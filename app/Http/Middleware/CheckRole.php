<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if(! $user->isAdmin()){
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}
