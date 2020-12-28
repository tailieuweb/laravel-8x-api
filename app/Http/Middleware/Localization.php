<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class Localization
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
        $language = Session::get('language', config('app.locale'));
        switch ($language) {
            case 'en':
                $language = 'en';
                break;

            default:
                $language = 'vi';
                break;
        }
       app()->setLocale($language);
        return $next($request);
    }
}
