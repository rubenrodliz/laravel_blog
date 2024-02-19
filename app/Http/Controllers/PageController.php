<?php

namespace App\Http\Controllers;

use App\Models\Thread;

class PageController extends Controller
{
    public function index() {
        $threads = Thread::orderBy('id', 'DESC')->paginate(5);

        return view('pages/index', compact('threads'));
    }
    public function thread($thread) {
        return view('pages/thread', compact('thread'));
    }
}
