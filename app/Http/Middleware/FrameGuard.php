<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrameGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Ensure $response is an instance of Laravel's Response class
        if ($response instanceof \Illuminate\Http\Response) {
            $response->header('X-Frame-Options', 'SAMEORIGIN');
            $response->header('Content-Security-Policy', "frame-ancestors 'self'");
        } elseif ($response instanceof \Symfony\Component\HttpFoundation\Response) {
            // Convert Symfony response to Laravel response and add headers
            $response = new \Illuminate\Http\Response($response->getContent(), $response->getStatusCode(), $response->headers->all());
            $response->header('X-Frame-Options', 'SAMEORIGIN');
            $response->header('Content-Security-Policy', "frame-ancestors 'self'");
        }

        return $response;

    }
}
