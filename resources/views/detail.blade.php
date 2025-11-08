@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h2 class="fw-bold">{{ $article->title }}</h2>
    <p class="text-muted">By {{ $article->writer->name }} | {{ $article->published_at }}</p>
    <p><strong>Category:</strong> {{ $article->category->name }}</p>
    <hr>
    <p style="white-space: pre-line;">{{ $article->content }}</p>
</div>
@endsection
