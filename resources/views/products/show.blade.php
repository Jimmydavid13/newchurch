
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ $product->name }}</div>

<div class="card-body">
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>
<a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</div>
</div>
@endsection
