<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;


class Language
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
//        if (\Session::has('language')) {
//            \App::setLocale(\Session::get('language'));
//        }
//        return $next($request);
        if(Session::get('lang') != null){
            App::setLocale(Session::get('lang'));
        }else{
            App::setLocale('en');
        }
        return $next($request);
    }
}
