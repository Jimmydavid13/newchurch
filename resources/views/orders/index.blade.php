
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Orders</div>

<div class="card-body">
@foreach($orders as $order)
<div class="card">
<div class="card-body">
<h5 class="card-title">Order #{{ $order->id }}</h5>
<p class="card-text">Total: {{ $order->total }}</p>
<a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">View</a>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection
