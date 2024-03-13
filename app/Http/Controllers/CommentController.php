<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Access\AuthorizationException;

class CommentController extends Controller
{
    public function create()
    {
    }

    /**
     * Delete a comment.
     *
     * @param \App\Models\Thread $thread
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Thread $thread, Comment $comment)
    {   
        if ($comment->thread_id === $thread->id) {
            $comment->delete();
            return back();
        }

        abort(403);
    }

    public function store(Request $request, Thread $thread)
    {
        Comment::create(['body' => $request->get('comment'), 'thread_id' => $thread->id, 'user_id' => Auth::user()->id]);
    }
}
