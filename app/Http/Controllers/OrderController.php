<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->input('user_id');
        $order->order_date = $request->input('order_date');
        $order->total = $request->input('total');
        $order->status = $request->input('status');
        $order->save();
        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->user_id = $request->input('user_id');
        $order->order_date = $request->input('order_date');
        $order->total = $request->input('total');
        $order->status = $request->input('status');
        $order->save();
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('orders.index');
    }
}
