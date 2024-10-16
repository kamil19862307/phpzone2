<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $posts = Post::query()
            ->select('id', 'title', 'slug', 'created_at', 'updated_at')
            ->orderByDesc('id')
            ->get();

        return view('admin.index', compact('posts'));
    }
}
