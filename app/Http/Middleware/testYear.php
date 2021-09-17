<?php

namespace App\Http\Middleware;

use Closure;

class testYear
{
    public function handle($request, Closure $next){
     $year = $request->route('year');
     if(is_null($year) || $year != 2021) {
         return redirect("/peliculas");
     } 
        return $next($request);
    }
}
