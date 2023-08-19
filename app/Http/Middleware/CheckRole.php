<?php

namespace App\Http\Middleware;

use App\User;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        $user = $request->user();
        if($user->role != $role ) {
            return abort('404');
        }

        return $next($request);
    }
}
