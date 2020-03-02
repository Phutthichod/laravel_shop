<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;
use Session;
class CheckLogin
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

        if(Session::has('username')){
            return $next($request);
        }
        // else return new response(view('index'));
        return redirect('index');
    }
}
