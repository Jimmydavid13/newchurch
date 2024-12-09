<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }

    public function store(Request $request)
    {
        $checkout = new Checkout();
        $checkout->user_id = Auth::id();
        $checkout->order_id = $request->input('order_id');
        $checkout->payment_method = $request->input('payment_method');
        $checkout->payment_token = $request->input('payment_token');
        $checkout->save();
        return redirect()->route('frontend.index');
    }
}
