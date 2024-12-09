@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Payment #{{ $payment->id }}</div>

<div class="card-body">
<p>Amount: {{ $payment->amount }}</p>
<p>Method: {{ $payment->payment_method }}</p>
<a href="{{ route('payments.index') }}" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</div>
</div>
@endsection
