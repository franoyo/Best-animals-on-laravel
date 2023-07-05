<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClienteAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $cliente=auth()->user();
        
        if ($cliente and $cliente->rol === 'cliente') {
            return $next($request);
        }
        return redirect()->route('login')->withSuccess('Su sesion como cliente ha expirado');
 
    }
}
