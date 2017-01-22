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

    public function getMapListData() {




    }


    public function getDetail() {
        return view('mobile.detail');
    }

    public function getLocation() {

        if (auth()->check()) {
            $userid = auth()->user()->id;
            if (User::where('id', $userid)->first()) {
                return redirect("/");
            }
        }

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
                    'uri' => '/'
                ]
            ]);
        }


    }

}