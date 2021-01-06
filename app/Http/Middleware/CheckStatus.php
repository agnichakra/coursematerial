<?php

namespace App\Http\Middleware;

use Closure;

class CheckStatus
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
        if(date('Y') == 2021) {

      
        // return redirect()->route('countrydata');

            return abort(404);
           // return redirect()->route('ourwebservice');
        }

       return $next($request);

       
    }
}
