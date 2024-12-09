@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Coupons</div>

<div class="card-body">
@foreach($coupons as $coupon)
<div class="card">
<div class="card-body">
<h5 class="card-title">{{ $coupon->code }}</h5>
<p class="card-text">{{ $coupon->description }}</p>
<a href="{{ route('coupons.show', $coupon->id) }}" class="btn btn-primary">View</a>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection
