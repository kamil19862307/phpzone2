@extends('admin.layout')

@section('title', 'Admin panel | Post pages')

@section('content')

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Посты</h1>
                <h1 class="page-subhead-line">Просмотр, редактирование и удаление постов </h1>

            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Posts
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Тайтл</th>
                                    <th class="text-center">Слаг</th>
                                    <th class="text-center">Дата создания</th>
                                    <th class="text-center">Дата редактирования</th>
                                    <th class="text-center">Редактировать</th>
                                    <th class="text-center">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>
                                            <a href="{{ route('posts.edit', $post->slug) }}">
                                                {{ $post->title }}
                                            </a>
                                        </td>
                                        <td>{{ $post->slug }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <a href="{{ route('posts.edit', $post->slug) }}">
                                                Редактировать
                                            </a>
                                        </td>
                                        <td>Удалить</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>
                <!--  end  Context Classes  -->

        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->

@endsection
