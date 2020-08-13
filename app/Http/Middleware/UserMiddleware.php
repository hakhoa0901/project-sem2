<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        $userName = $request->getSession()->get('userName');
        if($userName == null){
            $request->getSession()->flash('msg', 'Please login to continue!');
            return redirect('/login');
        }
        return $next($request);
    }
}
