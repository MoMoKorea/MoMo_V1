<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class SitterController extends Controller
{



    public function getSitterDetail ($id) {

        // 시터 상세페이지


        return view('mobile.detail');

    }


}