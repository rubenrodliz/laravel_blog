<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create() {
    }

    public function delete() {}

    public function update() {}

    public function store(Request $request, Thread $thread) {
        // dd($request);
        Comment::create(['body' => $request->get('comment'), 'thread_id' => $thread->id, 'user_id' => Auth::user()->id]);
    }
}
