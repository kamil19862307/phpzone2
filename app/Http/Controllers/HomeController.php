<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()->select('title', 'slug', 'content', 'created_at')->limit(10)->get();

        return view('index', compact('posts'));
    }
}
