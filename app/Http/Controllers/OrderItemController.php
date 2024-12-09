<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('order-items.index', compact('orderItems'));
    }

    public function create()
    {
        return view('order-items.create');
    }

    public function store(Request $request)
    {
        $orderItem = new OrderItem();
        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_id = $request->input('product_id');
        $orderItem->quantity = $request->input('quantity');
        $orderItem->price = $request->input('price');
        $orderItem->save();
        return redirect()->route('order-items.index');
    }

    public function show($id)
    {
        $orderItem = OrderItem::find($id);
        return view('order-items.show', compact('orderItem'));
    }

    public function edit($id)
    {
        $orderItem = OrderItem::find($id);
        return view('order-items.edit', compact('orderItem'));
    }

    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_id = $request->input('product_id');
        $orderItem->quantity = $request->input('quantity');
        $orderItem->price = $request->input('price');
        $orderItem->save();
        return redirect()->route('order-items.index');
    }

    public function destroy($id)
    {
        OrderItem::destroy($id);
        return redirect()->route('order-items.index');
    }
}
