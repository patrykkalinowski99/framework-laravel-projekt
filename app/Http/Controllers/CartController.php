<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {

        $query = Cart::with('product')->where('carts.user_id', $request->user()->id);
        $query = $query->get();

       return view('cart.index', ['cart' => $query]);
    }

    public function add(Request $request)
    {
        $product = new Cart();

        $product->user_id = $request->user()->id;
        $product->product_id = $request->id;
        $product->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        if(Cart::find($id)){
            Cart::destroy($id);
        }
        
        return redirect()->back();
    }
}
