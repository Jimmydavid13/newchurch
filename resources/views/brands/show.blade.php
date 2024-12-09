@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ $brand->name }}</div>

            <div class="card-body">
                <p>{{ $brand->description }}</p>
                <a href="{{ route('brands.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection