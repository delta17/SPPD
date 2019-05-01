<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rolename)
    {
        if($request->user()->hasRole($rolename)){
          return redirect()->to('/');
        }
        return $next($request);
    }
}
