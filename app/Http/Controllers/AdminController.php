<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->select('id', 'title', 'slug', 'created_at', 'updated_at')
            ->orderByDesc('id')
            ->get();

//        session(['last_login' => time()]);

        return view('admin.index', compact('posts'));
    }
}
