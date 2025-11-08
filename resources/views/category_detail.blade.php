@extends('layouts.app')

@section('content')
<h2 class="fw-bold mb-3 text-center">{{ $category->name }}</h2>
<div class="row">
    @foreach($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5>{{ $article->title }}</h5>
                    <p class="text-muted small">By {{ $article->writer->name }}</p>
                    <p>{{ Str::limit($article->excerpt, 80) }}</p>
                    <a href="{{ route('detail', $article->id) }}" class="btn btn-dark btn-sm">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
