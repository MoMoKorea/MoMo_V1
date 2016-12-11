<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);


        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            auth()->login($user);
//            return redirect('/');
        }


    }

}