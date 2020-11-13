<?php

namespace App\Http\Middleware;
use App;
use Closure;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->session()->get('lang');
        if ($lang){
            App::setlocale($lang);
        }

        return $next($request);
    }
}
