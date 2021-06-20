<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class setLanguage
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
        //CHANGE THE LOCAL LANGUAGE
        \App::setLocale($request->language);
        //CHECK IF SESSION EXISTS, IF YES CHANGE THE LOCALE LANG TO SESSION VALUE
        if ( $request->session()->has('language') ){
            \App::setLocale($request->session()->get('language'));
        }
        //PROCEED TO NEXT ROUTE
        return $next($request);
    }
}
