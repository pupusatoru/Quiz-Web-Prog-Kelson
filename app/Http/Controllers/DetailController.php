<?php

namespace App\Http\Controllers;

use App\Models\Article;

class DetailController extends Controller
{
    public function show($id)
    {
        $article = Article::with('writer', 'category')->findOrFail($id);
        return view('detail', compact('article'));
    }
}
