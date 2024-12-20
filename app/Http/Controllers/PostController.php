<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function show(Request $request): View
    {
        $post = Post::query()
            ->where('slug', '=', $request->slug)
            ->select('title', 'content', 'created_at')
            ->first();

        if (!$post) {
            return abort(404);
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Request $request): View
    {
        $post = Post::query()->where('slug', '=', $request->slug)->first();

        if (!$post) {
            return abort(404);
        }

        $categories = Category::query()->select('id', 'title')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request): RedirectResponse
    {
        // Не админ и не автор поста, то вносить изменения не имеет право
        if (!auth()->user()->is_admin && auth()->user()->id != $request->user_id) {

            flash()->alert('Пост № ' . $request->id . ' остался неизменным, недостаточно прав для изменения поста');

            return redirect(route('posts.edit', $request->slug));
//                ->with('danger', 'Пост № ' . $request->id . ' остался неизменным, недостаточно прав для изменения поста');
        }

        try {
            Post::query()
                ->findOrFail($request->id)
                ->update($request->all());

        } catch (Exception $exception){
            Log::error('Ошибка при изменении поста ' . $exception->getMessage());

            flash()->alert('Пост № ' . $request->id . ' остался неизменным, что-то пошло не так');

            return redirect(route('posts.edit', $request->slug));
//                ->with('danger', 'Пост № ' . $request->id . ' остался неизменным, что-то пошло не так');
        }

        flash()->info('Пост № ' . $request->id . ' успешно изменён');

        return redirect(route('posts.edit', $request->slug));
//            ->with('success', 'Пост № ' . $request->id . ' успешно изменён');
    }

    public function delete(Post $post): RedirectResponse
    {
        try {
            $post->delete();

        } catch (Exception $exception){
            Log::error('Ошибка при удалении поста ' . $exception->getMessage());

            flash()->alert('Что-то пошло не так, невозможно удалить ' . $post->title . $exception->getMessage());

            return redirect(route('admin.index'));
//                ->with('danger', 'Что-то пошло не так, невозможно удалить ' . $post->title . $exception->getMessage());
        }

        flash()->info($post->title . ' успешно удалён');

        return back();
    }

    public function create(): View
    {
        $categories = Category::query()->select('id', 'title')->get();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(PostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $post = Post::query()->create($validated);

        } catch (Exception $exception){
            Log::error('Ошибка при добавлении поста ' . $exception->getMessage());

            flash()->alert('Что-то пошло не так, пост не был добавлен');

            return to_route('admin.index');
//                ->with('danger', 'Что-то пошло не так, пост не был добавлен');
        }

        flash()->info('Post ' . $post->title . ' успешно добавлен');

        return to_route('admin.index');
//            ->with('success', 'Post ' . $post->title . ' успешно добавлен');
    }
}
