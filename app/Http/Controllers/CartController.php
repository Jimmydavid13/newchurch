<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->user_id = Auth::id();
        $cart->product_id = $request->input('product_id');
        $cart->quantity = $request->input('quantity');
        $cart->save();
        return redirect()->route('frontend.cart');
    }


    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->quantity = $request->input('quantity');
        $cart->save();
        return redirect()->route('frontend.cart');
    }

    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('frontend.cart');
    }
}
