@extends('layouts.app')

@section('content')
<h2 class="text-center mb-4 fw-bold">Writers</h2>
<div class="row justify-content-center">
    @foreach($writers as $writer)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-3">
                <h5>{{ $writer->name }}</h5>
                <p class="text-muted small">{{ $writer->email }}</p>
                <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-dark btn-sm">View Articles</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
