<?php

namespace App\Http\Middleware;
use Auth;


use Closure;

class Delivery_boy
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
      $userRoles = Auth::user()->relationroles->pluck('name');
      if($userRoles->contains('Delivery_boy')){
        return $next($request);
      }
      return redirect('login');
    }
}
