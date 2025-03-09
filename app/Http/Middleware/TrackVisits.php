<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$this->isBot($request) && !$this->isAsset($request)) {
            Visit::create([
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'page' => $request->path(),
            ]);
        }
        return $next($request);
    }

    private function isBot($request)
    {
        $userAgent = $request->userAgent();
        return preg_match('/bot|crawl|slurp|spider|mediapartners/i', $userAgent);
    }

    private function isAsset($request)
    {
        $path = $request->path();
        return preg_match('/bot|crawl|slurp|spider|mediapartners/i', $path);
    }
}
