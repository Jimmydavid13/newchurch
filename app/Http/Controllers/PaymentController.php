<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->order_id = $request->input('order_id');
        $payment->payment_method = $request->input('payment_method');
        $payment->payment_date = $request->input('payment_date');
        $payment->amount = $request->input('amount');
        $payment->save();
        return redirect()->route('payments.index');
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('payments.show', compact('payment'));
    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->order_id = $request->input('order_id');
        $payment->payment_method = $request->input('payment_method');
        $payment->payment_date = $request->input('payment_date');
        $payment->amount = $request->input('amount');
        $payment->save();
        return redirect()->route('payments.index');
    }

    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect()->route('payments.index');
    }
}
