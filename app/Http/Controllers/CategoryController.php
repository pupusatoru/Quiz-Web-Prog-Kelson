<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $articles = Article::where('category_id', $id)->with('writer')->get();
        return view('category_detail', compact('category', 'articles'));
    }
}
