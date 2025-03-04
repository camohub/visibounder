<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class SetLanguage
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lang should be set in session or in users table
        $lang = session('lang') ?? (auth()->user()?->lang ?? 'en');

        app()->setLocale($lang);

        return $next($request);
    }
}
