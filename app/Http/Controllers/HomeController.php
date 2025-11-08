<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('writer', 'category')->latest()->take(3)->get();
        return view('home', compact('articles'));
    }
}
