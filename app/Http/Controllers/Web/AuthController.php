<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Repository\DbUserRepository;
use Illuminate\Http\Request;



class AuthController extends Controller {


    private $userRepo;

    /**
     * AuthController constructor.
     */
    public function __construct(DbUserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function getAccount() {
        return view('mobile.account');
    }

    public function getLogin() {
        return view('mobile.login');
    }


    /**
     * @param Request $request
     */
    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);

        // 1. 계정 validation
        $error = $this->userRepo->checkLoginRequest($credentials);

        // 2. 틀렸을 경우
        if ($error)
        {

            $errorMsg = '';
            switch ($error) {
                case "notFound":
                    $errorMsg = '이메일과 일치하는 계정이 없습니다.';
                    break;
                case "wrong":
                    $errorMsg = '비밀번호가 틀렸습니다.';
                    break;
            }

            return json_encode([
                'meta' => [
                    'status' => -1,
                    'error' => $errorMsg
                ]
            ]);
        }

        // 3. 맞을경우 처리
        return json_encode([
           'meta' => [
               'status' => 1,
               'msg' => 'login success',
               'uri' => '/location'
           ]
        ]);

    }


    public function getCertification() {
        return view('mobile.certification');
    }

}