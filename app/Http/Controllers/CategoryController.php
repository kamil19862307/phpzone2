<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()->select('id', 'title', 'slug', 'description', 'thumbnail')->get();

        return view('categories.index', compact('categories'));
    }

    public function show(Request $request): View|Factory|Application
    {
        $category = Category::query()
            ->select('id', 'title', 'description', 'thumbnail')
            ->where('slug', '=', $request->slug)
            ->first();

        if (!$category){
            return abort(404);
        }

        $posts = $category->posts;

        return view('categories.show', compact('posts', 'category'));
    }
}
