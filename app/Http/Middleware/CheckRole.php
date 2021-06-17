<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);

        $user = \Auth::user();
        // dd($user->role, $roles);
        if($user != null){
            foreach ($roles as $role) { 
                $userRole = $user->role;
                if( $userRole == $role){
                    return $next($request);
                }
            }
            return redirect('/');
        } else{
            return $next($request);
            
        }
    }
}
