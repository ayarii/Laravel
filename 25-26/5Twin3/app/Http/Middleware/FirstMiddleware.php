<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $hour = date('H'); // heure actuelle (0–23)

        if ($hour < 9 || $hour > 18) {
            return response('Accès interdit en dehors de 9h-18h',
                403);
        }

        return $next($request); // continuer vers le contrôleur
    }
}
