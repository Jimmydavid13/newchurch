@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Brands</div>

            <div class="card-body">
                @foreach($brands as $brand)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $brand->name }}</h5>
                            <p class="card-text">{{ $brand->description }}</p>
                            <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
@endsection