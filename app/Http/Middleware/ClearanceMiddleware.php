<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware
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
        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
        {
            return $next($request);
        }
        if ($request->is('articles')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('List Article')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->is('articles/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create Article'))
            {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }

        if ($request->is('articles/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('Edit Article')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
         {
            if (!Auth::user()->hasPermissionTo('Delete Article')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }
        return $next($request);
    }
}
