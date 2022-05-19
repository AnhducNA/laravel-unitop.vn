<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    //
    function sendmail()
    {
        $data = [
            'key1' => 'Du lieu duoc truyen vao tu controller',
            'title' => 'Gửi email từ leanhduc.vn',
            'content' => 'Nội dung thông điệp',
        ];
        Mail::to('leanhducbigbang@gmail.com')->send(new DemoMail($data));
    }
}
