<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function add()
    {
        return view('admin.post.show');
    }

    function show()
    {
        return view('admin.post.show');
    }

    function update($id)
    {
        return view('admin.post.update', compact('id'));
    }

    function delete($id)
    {
        return "Admin: Trang xóa bài viết co id: {$id}";
    }
}
