<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($request->age < 17) {
			return redirect()->route('fail');
		}

		return $next($request);
	}
}
