<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "Hiển thị danh sách bài viết";
        return view('post');
    }

    function add()
    {
        return view('post.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Xử lý thêm dữ liệu
        // Cách 1:
        return redirect('post');
        // Cách 2 tối ưu hơn:
        // return redirect()->route('post.index');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100|min:5',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'max' => ':attribute có độ dài nhiều nhất 100 ký tự',
                'min' => ':attribute có độ dài ít nhất 5 ký tự',
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung',
            ]
        );

        $input = $request->all();

        if ($request->hasFile('file')) {
            $file = $request->file;

            // Lấy tên file:
            $filename = $file->getClientOriginalName();
            // Lấy đuôi file:
            echo $file->getClientOriginalExtension() . "<br>";
            // Lấy kích thước file:
            echo $file->getSize() . "<br>";

            $path = $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;
            $input['thumbnail'] = $thumbnail;
        }

        $input['user_id'] = 1;

        Post::create($input);

        // return redirect()->route('posts.show');
        return redirect('posts/show')->with('status', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $posts = Post::all();

        // Query Builder
        // $posts = DB::table('posts')->simplePaginate(4);

        // ORM
        $posts = Post::simplepaginate(8);
        // $posts->withPath('demo/show');
        // $posts = Post::where('id','>', 10)->orderby('id', 'desc')->simplepaginate(4);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        #Quert builer
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'iphone x plus',
        //         'votes' => '30'
        //     ]);

        #Lequent orm
        // $post = Post::find($id);
        // $post->title = "Le Anh Duc";
        // $post->content = "Content Laravel Pro update";
        // $post->user_id = 2;
        // $post->votes = 30;

        // $post->save();

        $post = Post::where('id', $id)
            ->update(
                [
                    'title' => 'Update',
                    'content' => 'Content update',
                    'user_id' => 2,
                    'votes' => 39,
                ]
            );
    }

    function delete($id)
    {
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();

        $Post = Post::where('id', $id)
            ->delete();

        // $Post=Post::destroy([1, 2, 3]);

    }

    function read()
    {
        // $posts = Post::withTrashed()->get();

        // $posts = Post::onlyTrashed()->get();
        // return $posts;

        // $img = Post::find(3)
        //     ->FeaturedImages;

        // return $img;

        $user = Post::find(3)
            ->user;

        $post = User::find(2)
            ->posts;

        // return $user;
        return $post;
    }

    function restore($id)
    {
        Post::where('id', $id)
            ->restore();
    }

    function forceDelete($id)
    {
        Post::where('id', $id)
            ->forceDelete();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
