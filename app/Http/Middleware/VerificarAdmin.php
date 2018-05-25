<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class VerificarAdmin
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

        $user =  Auth::user();

        if ( Auth::check() && $user->tipo_user_id == 4 )
        {
            return $next($request);
        }else{
            
        return "Ups, no tienes autorización para acceder para acceder";
        }

        }
}
