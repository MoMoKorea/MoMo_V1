<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Repository\DbMainRepository;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller {

    protected $mainRepo;

    /**
     * MainController constructor.
     */
    public function __construct(DbMainRepository $mainRepo)
    {
        $this->mainRepo = $mainRepo;
    }



    public function getDetail() {
        return view('mobile.detail');
    }

    public function getLocation() {

        // TODO :: 로그인된 회원중 이미 지역선택이 되있을경우 홈으로

        return view('mobile.location');
    }

    public function setLocation(Request $request) {

        $locationId = $request->input('locationId');

        if (auth()->check()) {

            auth()->user()->update([
               'location' => intval($locationId)
            ]);

            return json_encode([
                'meta' => [
                    'status' => 1,
                    'msg' => 'success'
                ],
                'data' => [
                    'uri' => '/test'
                ]
            ]);
        }


    }

}