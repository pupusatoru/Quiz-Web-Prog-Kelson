<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PopularController extends Controller
{
    public function index()
    {
        // Ambil 5 artikel dengan views tertinggi
        $popularArticles = Article::with(['writer', 'category'])
            ->orderByDesc('views')
            ->take(5)
            ->get();

        return view('popular', compact('popularArticles'));
    }
}
