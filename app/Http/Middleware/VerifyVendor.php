<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifyVendor
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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'teacher' || $user->role == 'administrator') {
                // return redirect('admin/dashboard');
            }elseif($user->role == 'member') {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
