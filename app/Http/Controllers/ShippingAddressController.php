<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingAddress;

class ShippingAddressController extends Controller
{
    public function index()
    {
        $shippingAddresses = ShippingAddress::all();
        return view('shipping-addresses.index', compact('shippingAddresses'));
    }

    public function create()
    {
        return view('shipping-addresses.create');
    }

    public function store(Request $request)
    {
        $shippingAddress = new ShippingAddress();
        $shippingAddress->user_id = $request->input('user_id');
        $shippingAddress->address = $request->input('address');
        $shippingAddress->city = $request->input('city');
        $shippingAddress->state = $request->input('state');
        $shippingAddress->zip_code = $request->input('zip_code');
        $shippingAddress->country = $request->input('country');
        $shippingAddress->save();
        return redirect()->route('shipping-addresses.index');
    }

    public function show($id)
    {
        $shippingAddress = ShippingAddress::find($id);
        return view('shipping-addresses.show', compact('shippingAddress'));
    }

    public function edit($id)
    {
        $shippingAddress = ShippingAddress::find($id);
        return view('shipping-addresses.edit', compact('shippingAddress'));
    }

    public function update(Request $request, $id)
    {
        $shippingAddress = ShippingAddress::find($id);
        $shippingAddress->user_id = $request->input('user_id');
        $shippingAddress->address = $request->input('address');
        $shippingAddress->city = $request->input('city');
        $shippingAddress->state = $request->input('state');
        $shippingAddress->zip_code = $request->input('zip_code');
        $shippingAddress->country = $request->input('country');
        $shippingAddress->save();
        return redirect()->route('shipping-addresses.index');
    }

    public function destroy($id)
    {
        ShippingAddress::destroy($id);
        return redirect()->route('shipping-addresses.index');
    }
}

// PaymentMethodController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('payment-methods.index', compact('paymentMethods'));
    }

    public function create()
    {
        return view('payment-methods.create');
    }

    public function store(Request $request)
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->user_id = $request->input('user_id');
        $paymentMethod->payment_method = $request->input('payment_method');
        $paymentMethod->payment_token = $request->input('payment_token');
        $paymentMethod->save();
        return redirect()->route('payment-methods.index');
    }

    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        return view('payment-methods.show', compact('paymentMethod'));
    }

    public function edit($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        return view('payment-methods.edit', compact('paymentMethod'));
    }

    public function update(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->user_id = $request->input('user_id');
        $paymentMethod->payment_method = $request->input('payment_method');
        $paymentMethod->payment_token = $request->input('payment_token');
        $paymentMethod->save();
        return redirect()->route('payment-methods.index');
    }

    public function destroy($id)
    {
        PaymentMethod::destroy($id);
        return redirect()->route('payment-methods.index');
    }
}
