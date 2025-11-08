@extends('layouts.app')

@section('content')
<h2 class="fw-bold mb-3 text-center">{{ $writer->name }}</h2>
<p class="text-center text-muted mb-5">{{ $writer->email }}</p>

<div class="row">
    @foreach($writer->articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>{{ $article->title }}</h5>
                    <p class="small text-muted">{{ $article->category->name }}</p>
                    <p>{{ Str::limit($article->excerpt, 90) }}</p>
                    <a href="{{ route('detail', $article->id) }}" class="btn btn-dark btn-sm">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
