<?php

namespace App\Http\Controllers;

use App\Models\Thread;

class PageController extends Controller
{
    public function index() {
        $threads = Thread::orderBy('id', 'DESC')->paginate(5);

        return view('pages/index', compact('threads'));
    }
    public function thread(Thread $thread) {
        $comments = $thread->comments()->paginate(5);

        return view('pages/thread', compact('thread', 'comments'));
    }
}
