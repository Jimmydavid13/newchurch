<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderStatus;

class OrderStatusController extends Controller
{
    public function index()
    {
        $orderStatuses = OrderStatus::all();
        return view('order-statuses.index', compact('orderStatuses'));
    }

    public function create()
    {
        return view('order-statuses.create');
    }

    public function store(Request $request)
    {
        $orderStatus = new OrderStatus();
        $orderStatus->order_id = $request->input('order_id');
        $orderStatus->status = $request->input('status');
        $orderStatus->save();
        return redirect()->route('order-statuses.index');
    }

    public function show($id)
    {
        $orderStatus = OrderStatus::find($id);
        return view('order-statuses.show', compact('orderStatus'));
    }

    public function edit($id)
    {
        $orderStatus = OrderStatus::find($id);
        return view('order-statuses.edit', compact('orderStatus'));
    }

    public function update(Request $request, $id)
    {
        $orderStatus = OrderStatus::find($id);
        $orderStatus->order_id = $request->input('order_id');
        $orderStatus->status = $request->input('status');
        $orderStatus->save();
        return redirect()->route('order-statuses.index');
    }

    public function destroy($id)
    {
        OrderStatus::destroy($id);
        return redirect()->route('order-statuses.index');
    }
}
