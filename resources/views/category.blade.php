@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center fw-bold">Categories</h2>
<div class="row justify-content-center">
    @foreach($categories as $category)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-outline-dark mt-2">View Courses</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
