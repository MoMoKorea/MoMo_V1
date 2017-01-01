<?php namespace App\Http\Repository;

use App\User;
use Illuminate\Support\Facades\Hash;

class DbUserRepository {

    // 로그인 체크
    public function checkLoginRequest($credentials) {

        // 1. 아이디 존재여부 체크
        $user = User::where('email', $credentials['email'])->first();

        // 2. 없는 계정
        if (!$user) return 'notFound';

        // 3. 계정이 존재하고 기타 맞지않는 상황
        if(!Hash::check(getPasswordWithSalt($credentials['password']), $user->password)) {
            return 'wrong';
        }

        auth()->login($user, true);
    }
}