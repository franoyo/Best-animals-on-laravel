<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        $empleado = auth()->guard('empleado')->user();

        if ($empleado and $empleado->rol === 'administrador') {
            return $next($request);
        }

        return redirect()->route('login')->withSuccess('Usted no es administrador. Sea serio :v');
    }
}
