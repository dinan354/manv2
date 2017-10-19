<?php
	
	namespace App\Http\Middleware;

	use Closure;
	use Illuminate\Support\Facades\Auth;

	class AdminDanGuru {

		public function handle($request, Closure $next, $guard = null)
	    {
	        if(Auth::user()->hasRole('superadmin') || Auth::user()->hasRole('teacher')){
	            return $next($request);
	        } else {
	          return redirect('/');
	        }


	    }

	}

?>