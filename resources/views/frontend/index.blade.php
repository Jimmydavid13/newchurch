@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Products</div>

            <div class="card-body">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Price: {{ $product->price }}</p>
                            <a href="{{ route('frontend.show', $product->id) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
@endsection