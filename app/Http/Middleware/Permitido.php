<?php

namespace App\Http\Middleware;

use App\UsuarioPermitido;
use Closure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Permitido


{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->usuarioPermitido()->permitido()) {
            return $next($request);
        }


        return redirect('/noPermitido');

    }
}