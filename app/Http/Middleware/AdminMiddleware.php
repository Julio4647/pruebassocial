<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        if (Auth::guard('admin')->check()) {
            // El usuario está autenticado a través del guard 'web', se permite el acceso a la ruta
            return $next($request);
        }

        // El usuario no es un administrador, se redirige o muestra un error
        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
