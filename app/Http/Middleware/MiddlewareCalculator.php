<?php 
namespace App\Http\Middleware;

use Closure;

class  MiddlewareCalculator
{
		public function handle($request, Closure $next)
		{
			echo "hei";
			echo '<pre>'.print_r($request, true) .'</pre>';
		}
}