<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        // Xử lý logic nếu cần
        // Trả về view cho trang chủ
        return view('register');
    }
}
