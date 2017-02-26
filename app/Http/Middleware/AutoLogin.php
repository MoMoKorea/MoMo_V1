<?php namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class AutoLogin
{

    protected $auth;

    /**
     * AutoLogin constructor.
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next) {

        $token = $request->input('token');
        if ($token) {
            $user = User::where('api_token', $token)->first();
            if ($user) {
                $this->auth->login($user, true);
            }
        }


        return $next($request);
    }

}