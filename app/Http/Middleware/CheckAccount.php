<?php

namespace App\Http\Middleware;

use Closure;

class CheckAccount
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
        $type = $request->getSession()->get('type');
        if($userName == null){
            $request->getSession()->flash('msg', 'Please login to continue!');
            return redirect('/login');
        }
        if ($type == 'admin'){
        $request->getSession()->flash('msg','admin');
        return redirect('/categories');
        }elseif ($type == 'customer')
        return $next($request);
    }
}
