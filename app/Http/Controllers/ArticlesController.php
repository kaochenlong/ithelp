<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        return view('articles.index');
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        auth()->user()->articles()->create($content);
        return redirect()->route('root')->with('notice', '文章新增成功！');
    }
}
