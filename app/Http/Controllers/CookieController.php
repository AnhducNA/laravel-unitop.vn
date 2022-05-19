<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    function set()
    {
        $response = new Response();
        return $response->cookie('unitop', 'Hoc web di lam', 24 * 60);
    }
    function get(Request $request)
    {
        return $request->cookie('unitop');
    }
}
