<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request)
    {
        $post = Post::query()
            ->where('slug', '=', $request->slug)
            ->select('title', 'content', 'created_at')
            ->first();

        return view('posts.show', compact('post'));
    }
}
