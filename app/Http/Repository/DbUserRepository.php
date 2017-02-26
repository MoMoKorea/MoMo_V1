<?php namespace App\Http\Repository;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $user->update([
            'token' => hash('sha256', Str::random(10), false)
        ]);

    }

    public function signup($credential)
    {
        $email = trim($credential['email']);
        $username = explode('@', $email)[0];

        // 유저이름 중복 체크
        if(User::where('username', $username)->first()) {
            $username = $username . str_random(5);
        }

        $userData = [
            'email' => $email,
            'username' => $username,
            'password' => bcrypt(getPasswordWithSalt($credential['password']))
        ];

        // 계정 생성
        $user = User::create($userData);
        // 로그인
        auth()->login($user, true);

        return true;

    }

    public function getMainSitterList()
    {

        $testLat = 37.4782427;
        $testLan = 127.1287351;

        $sitterList = User::where('type', 'SITTER')->get();

        $simpleList = array();
        if ($sitterList
        && count($sitterList) > 0)
        {

            foreach($sitterList as $sitter) {

                $randPosition = (mt_rand(1, 9) / 2000);
                $randRate = (mt_rand(1, 5) * 1.1);

                $sitterData = [
                    'id' => $sitter->id,
                    'picture_image' => $sitter->picture_image,
                    'username' => $sitter->username,
                    'age' => $sitter->age,
                    'career' => $sitter->career,
                    'lat' => $testLat + $randPosition,
                    'lan' => $testLan + $randPosition,
                    'rate' => $randRate
                ];
                array_push($simpleList, $sitterData);
            }

            return $simpleList;
        }
        return null;
    }

    public function getSitterDetail($sitter_id) {

        $sitter = User::with(['rates', 'locations'])->where('id', $sitter_id)->first();

        // 평가 평점, 갯수
        $sitter->countRate = $sitter->rates->count();
        $sitter->avgRate = $sitter->rates->avg('rate');

        // 구글맵 정적 이미지 url
        $url = 'https://maps.googleapis.com/maps/api/staticmap?key=' . getGoogleApiKey() . '&size=345x150&markers=37.477944,127.127571' ;
        $url = $url . '&center=37.477944,127.127571';
        $url = $url . '&zoom=14';
        $sitter->addrImgUrl = $url ;

//        $sitter->work_days = json_decode($sitter->work_days);
        return $sitter;
    }

}