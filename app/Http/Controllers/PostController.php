<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View {
        $posts = Post::all();

        return view('posts/index', compact('posts'));
    }
    public function edit() {}
    public function store() {}
    public function update() {}
    public function destroy() {}
}
