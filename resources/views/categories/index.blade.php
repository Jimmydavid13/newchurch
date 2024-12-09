@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Categories</div>

            <div class="card-body">
                @foreach($categories as $category)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
@endsection