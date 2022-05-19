<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url()
    {
        // 1. Tạo url cơ bản 
        // $url = url('login');

        // 2. Tạo url qua route
        // $url = route('posts.show');

        // 3. Tạo url qua action
        // $url = action('App\Http\Controllers\PostController@store');

        // 4. Lấy đường dẫn hiện tại:
        $url = url()->current();
        echo $url;
    }
    function string()
    {
        // Bài 16.11: Kiểm tra chứa chuỗi con
        echo Str::contains('lê anh đức kma', 'kma');
    }
}
