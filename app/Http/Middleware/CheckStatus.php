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
       
      
      if($request->age  && $request->age < 18 ) {
 /*
 if($data["country_name"] != "India")
 
 */
      
        // return redirect()->route('countrydata');

         return abort(404);

        // abcd();

        /*  $data = get_country_from_ip();
          echo $data["country_name"];*/
          // return redirect()->route('ourwebservice');
        }

       return $next($request);

       
    }
}
