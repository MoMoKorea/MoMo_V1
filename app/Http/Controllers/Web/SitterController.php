<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;

class SitterController extends Controller
{


    // 시터 상세페이지
    public function getSitterDetail ($id) {

        $sitter = User::where('id', $id)->first();

        // 구글맵 정적 이미지 url
        $url = 'https://maps.googleapis.com/maps/api/staticmap?key=' . getGoogleApiKey() . '&size=345x150&markers=37.477944,127.127571' ;
        $url = $url . '&center=37.477944,127.127571';
        $url = $url . '&zoom=14';

        $sitter->addrImgUrl = $url ;




        return view('mobile.detail', compact('sitter'));

    }


}