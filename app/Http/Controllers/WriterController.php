<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Models\Category;
use App\Models\Article;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::with('articles.category')->findOrFail($id);
        return view('writer_detail', compact('writer'));
    }
}
