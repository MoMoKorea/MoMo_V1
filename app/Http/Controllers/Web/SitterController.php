<?php namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Repository\DbUserRepository;
use App\Location;
use App\User;

class SitterController extends Controller
{

    protected $userRepo;

    /**
     * SitterController constructor.
     */
    public function __construct(DbUserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    // 시터 상세페이지
    public function getSitterDetail ($id) {
        $sitter = $this->userRepo->getSitterDetail($id);
        return view('mobile.detail', compact('sitter'));
    }


}