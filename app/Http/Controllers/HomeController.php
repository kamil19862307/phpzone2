<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()->select('title', 'slug', 'content', 'created_at')->paginate(10);

        return view('index', compact('posts'));
    }
}
