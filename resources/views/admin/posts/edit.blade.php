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
                <div class="panel panel-info">
                    <div class="panel-heading">
                        BASIC FORM
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="post" role="form">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input name="title"
                                       class="form-control"
                                       type="text"
                                       value="{{ $post->title }}">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Слаг</label>
                                <input name="slug"
                                       class="form-control"
                                       type="text"
                                       value="{{ $post->slug }}">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control">
                                    <option>One Vale</option>
                                    <option>Two Vale</option>
                                    <option>Three Vale</option>
                                    <option>Four Vale</option>
                                </select>
                            </div>
                            <div class="form-group">
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
