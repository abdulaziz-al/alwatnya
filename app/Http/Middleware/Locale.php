<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;

class Locale
{
    
        public function handle($request, Closure $next)
        {
            app()->setLocale($request->segment(1));
            return $next($request);
        }
    }
 