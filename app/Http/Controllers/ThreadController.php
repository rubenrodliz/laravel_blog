<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function store(Request $request)
    {
        $thread = [
            'title' => $request->name,
            'slug' => Str::slug($request->name),
            'body' => $request->description,
            'user_id' => Auth::user()->id,
        ];

        Thread::create($thread);

        return back();
    }

    public function destroy(Thread $thread) {
        $thread->delete();
        return back();
    }
}
