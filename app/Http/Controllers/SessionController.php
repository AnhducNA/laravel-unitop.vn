<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    function add(Request $request)
    {
        // $request->session()->put('username', 'leanhduc');
        // $request->session()->put('login', 'true');

        session(['username'=>'leanhduc']);
    }
    function show(Request $request)
    {
        // return $request->session()->all();
        // if ($request->session()->has('username')) {
        //     echo "Đã lưu username vào session";
        // }
        // return $request->session()->get('status');
        // return $request->session()->get('username');
        return session('username');
    }
    function add_flash(Request $request)
    {
        // $request->session()->flash('status', 'Bạn đã thêm sản phẩm thành công');
    }
    function delete(Request $request)
    {
        // 1. Xóa 1 session
        // $request->session()->forget('username');
        // 2. Xóa tất cả session
        $request->session()->flush();
    }
}
