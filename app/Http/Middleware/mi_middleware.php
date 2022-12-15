<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mi_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->id;
        //2. Validar
        if (!is_numeric($id) || $id < 0) {
            return response('error', 422);
        } else {
            //3. Dejar seguir o tirar hacia atras
            return  $next($request);
        }
    }
}
