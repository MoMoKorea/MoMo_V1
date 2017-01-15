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
    public function getSignup() {

        return view('mobile.signup');
    }

    public function signup(Request $request) {

        $credentials = $request->only(['email', 'password']);

        // TODO :: validation

        if($this->userRepo->signup($credentials)) {

            return json_encode([
                'status' => 1,
                'success' => [
                    'message' => '환영합니다!'
                ],
                'data' => [
                    'uri' => '/'
                ]
            ]);

        }

        return json_encode([
            'status' => -1,
            'errors' => [
                'message' => '회원가입에 실패했습니다.'
            ]
        ]);
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