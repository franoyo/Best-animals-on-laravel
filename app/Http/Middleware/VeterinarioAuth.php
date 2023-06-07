<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VeterinarioAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() and auth()->user()->rol=='veterinario') {
            return $next($request);
        }
        return redirect()->route('login') ->withSuccess('Usted no es veterinario se le va a inyectar un virus por intentar vulnerar la seguridad :V');
    }
}
