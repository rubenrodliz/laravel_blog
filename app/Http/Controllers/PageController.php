<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function thread($thread) {
        return view('pages/thread', compact('thread'));
    }
}
