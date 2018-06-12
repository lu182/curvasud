<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class VerifyJefeTaller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->tipo_user_id<3){
            return redirect()->route("sin_permiso");
        }
        return $next($request);
    }
}
