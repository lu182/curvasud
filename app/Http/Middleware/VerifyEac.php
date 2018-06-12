<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class VerifyEac
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
        if($user){
        if ($user->tipo_user_id<2){
            return redirect()->route("sin_permiso");
        }
        return $next($request);}
        return redirect()->route("sin_permiso");

    }
}
