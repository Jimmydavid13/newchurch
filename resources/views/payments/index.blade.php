
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Payments</div>

<div class="card-body">
@foreach($payments as $payment)
<div class="card">
<div class="card-body">
<h5 class="card-title">Payment #{{ $payment->id }}</h5>
<p class="card-text">Amount: {{ $payment->amount }}</p>
<a href="{{ route('payments.show', $payment->id) }}" class="btn btn-primary">View</a>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection
