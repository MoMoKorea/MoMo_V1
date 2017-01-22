<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Repository\DbUserRepository;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    protected $userRepo;
    protected $statusCode;

    /**
     * ApiController constructor.
     */
    public function __construct(DbUserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getApplicationJson (Request $request) {

        // 1. 메뉴 버전

        // menu


    }


    public function getMainSitterList(Request $request) {

        // 시터 불러오기 (TODO:: pagination)
        $sitterList = $this->userRepo->getMainSitterList();

        $this->setStatusCode(200)->responseSuccessData(['sitters' => $sitterList]);

    }

    public function setStatusCode($code) {
        $this->statusCode = $code;
        return $this;
    }


    public function responseSuccessData($data = null, $message = null) {

        return $this->response([
            'status' => 1,
            'success' => $message,
            'data' => $data
        ]);

    }

    public function response ($data, $header = array()) {
        return response()->json($data, $this->statusCode, $header);
    }


}