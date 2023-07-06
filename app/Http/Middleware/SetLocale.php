<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $language = 'en'; // default

        if (request('lang')) {
            $language = request('lang');
            session()->put('lang', $language);
        } elseif (session('lang')) {
            $language = session('lang');
        }
        app()->setLocale($language);

        return $next($request);
    }
}
