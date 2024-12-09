<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        $coupon = new Coupon();
        $coupon->code = $request->input('code');
        $coupon->discount_type = $request->input('discount_type');
        $coupon->discount_amount = $request->input('discount_amount');
        $coupon->expiration_date = $request->input('expiration_date');
        $coupon->save();
        return redirect()->route('coupons.index');
    }

    public function show($id)
    {
        $coupon = Coupon::find($id);
        return view('coupons.show', compact('coupon'));
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('coupons.edit', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->code = $request->input('code');
        $coupon->discount_type = $request->input('discount_type');
        $coupon->discount_amount = $request->input('discount_amount');
        $coupon->expiration_date = $request->input('expiration_date');
        $coupon->save();
        return redirect()->route('coupons.index');
    }

    public function destroy($id)
    {
        Coupon::destroy($id);
        return redirect()->route('coupons.index');
    }
}
