<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckLogin
{

    protected $auth;

    /**
     * CheckLogin constructor.
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next) {

        if (!$this->auth->check()) {

            return redirect("login");
        }

        return $next($request);

    }
}