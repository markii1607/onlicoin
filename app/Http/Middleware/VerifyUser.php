<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class VerifyUser
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
        $user = User::find(auth()->user()->id);

        if (preg_match('/auth-verify/',$request->url())) {
            if ($user->verified === 0) {
                return $next($request);
            }else{
                return redirect('auth-index');
            }
        }
        if ($user->verified === 0) {
            return redirect('auth-verify');
        }

        return $next($request);
    }
}
