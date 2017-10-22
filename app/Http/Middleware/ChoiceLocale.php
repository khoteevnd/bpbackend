<?php

namespace budprirodi\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class ChoiceLocale
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

        //Set locale
        if($request->route()->getPrefix() === 'uk/')
        {
            App::setLocale('uk');
        }
        elseif ($request->route()->getPrefix() === 'en/')
        {
            App::setLocale('en');
        }


        return $next($request);
    }
}
