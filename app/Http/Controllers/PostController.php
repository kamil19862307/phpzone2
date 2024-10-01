<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request)
    {
        $post = Post::query()
            ->where('slug', '=', $request->slug)
            ->select('title', 'content', 'created_at')
            ->first();

        if (!$post){
            return abort(404);
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Request $request)
    {
        $post = Post::query()->where('slug', '=', $request->slug)->first();

        if (!$post){
            return abort(404);
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        dd($request->id);
    }
}
