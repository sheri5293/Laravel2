<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // header("Access-Control-Allow-Origin: *");
        // header("Access-Control-Allow-Origin: http://127.0.0.1:8000");
        // header('Access-Control-Allow-Methods: GET, POST,PUT,DELETE ,OPTIONS');
        // header("Access-Control-Allow-Headers: Content-Type, Authorization");
        // header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Methods: *');
        // header('Access-Control-Allow-Headers: *');
        $response =$request;
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type,Accept, Authorization');
        $response->headers->set('Access-Control-Allow-Credentials', 'true');
        return $next($request);
    }