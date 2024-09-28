@extends('layouts.app')

@section('content')

    <!--Grid column-->
    <div class="col-lg-8 col-md-9 mb-4">
        <!--Section: Cards-->
        <section>
            <div>
                <!--Section: Cards-->
                <section class="mx-1">

                    <div class="desktop-mx-5">
                        <!--Card content-->
                        <div class="">

                            <div class="media d-block d-md-flex hideOnMobile">
                                <img src="../storage/images/category/{{ $category->thumbnail }}"
                                     class="d-flex mb-3 mt-2 mx-auto" alt="Ивашкевич Артём" style="width: 200px;">
                                <div class="media-body text-justify ml-md-5 ml-0">
                                    <p>{{ $category->title }}</p>
                                    <p>{{ $category->description }}</p>
                                </div>
                                <div class="showOnMobile">
                                    <div style="text-align: center">
                                        <div style="text-align:center;width:100%" class="mb-3">
                                            <img src="../storage/images/category/{{ $category->thumbnail }}"
                                                 style="max-width: 100%" alt="Артём Ивашкевич">
                                        </div>
                                    </div>
                                    <div class="text-justify">
                                        <p>{{ $category->title }}</p>
                                        <p>{{ $category->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($posts as $post)

                            <hr class="my-5">

                            <div>
                                <a href="https://php.zone/post/rabbitmq-scaling-ordering">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>{{ $post->title }}</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2">
                                    <p>{{ Str::limit($post->content, 670, preserveWords: true) }}</p>
                                    <p><!--more--></p></div>

                                <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary btn-md">Читать
                                    далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>
                                        <div class="mt-2">
                                            <a href="https://php.zone/tag/php">#php</a>
                                            <a href="https://php.zone/tag/rabbitmq">#rabbitmq</a>
                                            <a href="https://php.zone/tag/%D0%BE%D1%87%D0%B5%D1%80%D0%B5%D0%B4%D1%8C_%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B9">#очередь
                                                сообщений</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/4706">@lolychank</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">{{ $post->created_at }}||</span>
                                                <span class="dark-grey-text">26.01.2023 в 16:36</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4714</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1160)" class="postRatingUp text-primary"
                                               data-post-id="1160"><i
                                                    class="fa fa-arrow-up postRatingUpArrow1160"></i></a>
                                            <div class="postRating postRatingValue1160" data-post-id="1160"
                                                 style="display: inline-block">+4
                                            </div>
                                            <a onclick="postRatingDown(1160)" class="postRatingDown text-primary"
                                               data-post-id="1160"><i
                                                    class="fa fa-arrow-down postRatingDownArrow1160"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/rabbitmq-scaling-ordering#comments"><i
                                                    class="fa fa-comment"></i> 0</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                </section>
            </div>
        </section>
    </div>
    <!--Grid column-->

@endsection

