<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class MainController extends Controller {


    /**
     * MainController constructor.
     */
    public function __construct()
    {
    }


    public function getLogin() {
        return view('mobile.login');
    }

//    public function getSignup() {
//        return view('mobile.signup');
//    }

    public function getCertification() {
        return view('mobile.certification');
    }

    public function getDetail() {
        return view('mobile.detail');
    }

    public function getLocation() {
        return view('mobile.location');
    }

}