@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Reviews</div>

<div class="card-body">
@foreach($reviews as $review)
<div class="card">
<div class="card-body">
<h5 class="card-title">{{ $review->title }}</h5>
<p class="card-text">{{ $review->review }}</p>
<a href="{{ route('reviews.show', $review->id) }}" class="btn btn-primary">View</a>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection