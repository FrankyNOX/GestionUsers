<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Role
{
    /**
     * Gérez une demande entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        //Non enregistré
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Interdit
        if($role !== null && !$request->user()->hasRole($role)) {
            return abort(403);
        }

        return $next($request);
    }
}
