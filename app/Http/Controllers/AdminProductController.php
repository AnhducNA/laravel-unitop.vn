<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    function add()
    {
        DB::table('products')
            ->insert(
                [
                    'name' => 'iphone 8 plus',
                    'content' => "content's iphone 8 plus",
                    'price' => 800,
                    'product_cat_id' => 1,
                    'user_id' => 1,
                ],

                [
                    'name' => 'acer aspire',
                    'content' => "content's acer aspire",
                    'price' => 1000,
                    'product_cat_id' => 1,
                    'user_id' => 2,
                ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = DB::table('products')
            ->select('*')
            ->get();

        echo "<pre>";
        print_r($products);
        echo "</pre>";
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
        DB::table('products')
            ->where('id', $id)
            ->update(
                ['price' => 750]
            );
    }

    function delete($id){
        DB::table('products')
        ->where('id', $id)
        ->delete();
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
