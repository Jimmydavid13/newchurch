@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Order #{{ $order->id }}</div>

<div class="card-body">
<p>Total: {{ $order->total }}</p>
<p>Status: {{ $order->status }}</p>
<a href="{{ route('orders.index') }}" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</div>
</div>
@endsection

