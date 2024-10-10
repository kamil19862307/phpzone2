@extends('admin.layout')

@section('title', 'Admin panel | Edit Post')

@section('content')

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Новый пост</h1>
                <h1 class="page-subhead-line">Создание постов</h1>
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
                        <form action="{{ route('posts.store') }}" method="post" role="form">
                            @method('post')
                            @csrf

                            <div class="form-group @error('title') has-error @enderror">
                                <label for="title" class="form-label">Тайтл</label>
                                <input type="text"
                                        name="title"
                                        class="form-control"
                                        id="title"
                                        value="{{ old('title') }}">
                                @error('title')
                                    <p class="help-block">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group @error('slug') has-error @enderror">
                                <label>Слаг</label>
                                <input name="slug"
                                       type="text"
                                       class="form-control"
                                       value="{{ old('slug') }}">
                                @if($errors->has('slug'))
                                    <p class="help-block">{{ $errors->first('slug') }}</p>
                                @endif
                            </div>
                            <div class="form-group @error('category_id') has-error @enderror">
                                <label>Категория</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
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
                                >{!! old('content') !!}</textarea>
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
