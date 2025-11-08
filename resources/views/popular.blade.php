@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="fw-bold mb-4 text-center">🔥 Popular Articles</h3>

    <div class="row g-4">
        @foreach($popularArticles as $article)
            <div class="col-12">
                <div class="card flex-row border-0 shadow-sm rounded-4 overflow-hidden">
                    <img src="https://source.unsplash.com/300x200/?{{ $article->category->name }}"
                         class="rounded-start" alt="">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                        <p class="card-text text-muted small">
                           {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
                        </p>
                        <p>{{ Str::limit($article->excerpt, 150) }}</p>
                        <p class="text-secondary small">👁️ {{ $article->views }} views</p>
                        <a href="#" class="btn btn-dark btn-sm rounded-pill px-3">read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
