@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Welcome to EduFun</h1>
    <p class="text-muted">Learn IT courses for free: Data Science & Network Security</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRktX6nTxzKjKFyxezMcL87x4w6ZtxYkbyt5g&s" class="img-fluid rounded shadow-sm mt-3" width="100">
</div>

<h3 class="mb-4">Latest Articles</h3>
<div class="row">
    @foreach($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="text-muted small">By {{ $article->writer->name }} | {{ $article->published_at }}</p>
                    <p class="card-text">{{ Str::limit($article->excerpt, 100) }}</p>
                    <a href="{{ route('detail', $article->id) }}" class="btn btn-dark btn-sm">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
