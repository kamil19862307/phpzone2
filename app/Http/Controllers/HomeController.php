<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::query()->select('title', 'slug', 'content', 'created_at')->paginate(10);

        return view('index', compact('posts'));
    }
}
