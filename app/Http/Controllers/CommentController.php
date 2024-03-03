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
    /**
     * Delete a comment.
     *
     * @param \App\Models\Thread $thread
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Thread $thread, Comment $comment): RedirectResponse|AuthorizationException
    {
        if ($comment->thread_id === $thread->id) {
            $comment->delete();
            return redirect()->back();
        }

        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function update(Request $request, Comment $comment)
    {
        dd($request, $comment);

        $data = $request->validate([
            'body' => 'required|string',
        ]);

        $comment->update([
            'body' => $data['body'],
            'is_edited' => true,
        ]);

        return back()->with('success', 'Comentario actualizado con éxito.');
    }

    /**
     * Create a new comment for the given thread.
     *
     * @param Request $request
     * @param Thread $thread
     * @return void
     */
    public function store(Request $request, Thread $thread)
    {
        Comment::create(['body' => $request->get('comment'), 'thread_id' => $thread->id, 'user_id' => Auth::user()->id]);
    }
}
