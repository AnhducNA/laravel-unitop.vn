<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show()
    {
        return view('cart.show');
    }
    function add($id)
    {
        // Cart::destroy();
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'thumbnail' => $product->thumbnail,
            ]
        ]);
        // echo "<pre>";
        // print_r(Cart::content());
        // return $product;
        return redirect('cart/show');
    }
    function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }
    function destroy()
    {
        Cart::destroy();
        return redirect('cart/show');
    }
    function update(Request $request)
    {
        // dd($request->all());

        $data = $request->get('qty');
        foreach ($data as $k => $v) {
            Cart::update($k, $v);
        }
        return redirect('cart/show');
    }
}
