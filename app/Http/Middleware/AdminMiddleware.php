<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        $username =$request->getSession()->get('username');
        $role = $request->getSession()->get('role');
        if ($username == null){
            $request->getSession()->flash('msg','Please login to continue');
            return redirect('/login');
        }
        if ($role != 'admin'){
            $request->getSession();
            return redirect('/login');
        }
        return $next($request);
    }
}
