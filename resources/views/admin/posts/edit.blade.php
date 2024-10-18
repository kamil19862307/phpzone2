@extends('admin.layout')

@section('title', 'Admin panel | Edit Post')

@section('content')

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">{{ $post->title }}</h1>
                <h1 class="page-subhead-line">Просмотр, редактирование постов </h1>
            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                    @if(session('success') || session('danger'))
                        <div class="alert alert-{{ session('success') ? 'success' : 'danger' }}">
                            {{ session('success') ?? session('danger') }}
                        </div>
                    @endif

                <div class="panel panel-info">
                    <div class="panel-heading">
                        BASIC FORM
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="post" role="form">
                            @method('put')
                            @csrf

                            <input type="hidden"
                                    name="user_id"
                                    value="{{ $post->user_id }}"/>

                            <fieldset disabled>
                                <div class="form-group">
                                    <label>ID</label>
                                    <input name="id"
                                           class="form-control"
                                           type="text"
                                           value="{{ $post->id }}">
                                    <p class="help-block">Поле ID нельзя менять!</p>
                                </div>
                            </fieldset>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label>Автор</label>
                                    <input class="form-control"
                                           type="text"
                                           value="{{ $post->user->name }}">
                                    <p class="help-block">У автора статьи неизменный автор.</p>
                                </div>
                            </fieldset>
                            <div class="form-group @error('title') has-error @enderror">
                                <label for="title" class="form-label">Тайтл</label>
                                <input type="text"
                                        name="title"
                                        class="form-control"
                                        id="title"
                                        value="{{ $post->title }}">
                                @if($errors->has('title'))
                                    <p class="help-block">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                            <div class="form-group @error('slug') has-error @enderror">
                                <label>Слаг</label>
                                <input name="slug"
                                       type="text"
                                       class="form-control"
                                       value="{{ $post->slug }}">
                                @if($errors->has('slug'))
                                    <p class="help-block">{{ $errors->first('slug') }}</p>
                                @endif
                            </div>
                            <div class="form-group @error('category_id') has-error @enderror">
                                <label>Категория</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group @error('content') has-error @enderror">
                                <label>Контент</label>
                                <textarea name="content"
                                          class="form-control"
                                          rows="20"
                                >{{ $post->content }}</textarea>
                            </div>


                            <button type="submit" class="btn btn-success">Сохранить</button>
                            <button type="reset" class="btn btn-danger">Сбросить</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->

@endsection
