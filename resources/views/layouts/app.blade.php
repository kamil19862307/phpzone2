<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Всё о PHP - PHP.Zone</title>
    <meta name="description"
          content="Всё о разработке на языке PHP: статьи, обучающие курсы, вопросы и ответы, задачи с собеседований, работа. На PHP.Zone (ранее WebShake) вы найдёте всё необходимое для PHP-разработчика.">
    <meta name="keywords"
          content="PHP, разработка на PHP, программирование на PHP, обучение программированию на PHP, статьи о разработке на PHP, IT и PHP, технологии PHP-разработчиков">

    @vite([
        'resources/css/app.css',
        'resources/css/font-awesome.css',
        'resources/css/allStyles.min.css',
        'resources/js/app.js',
        'resources/js/js.js',
        'resources/js/tag.js',
        'resources/js/users.min.js',
        ])

</head>

<body cz-shortcut-listen="true">
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white scrolling-navbar top-nav-collapse">
        <div class="container px-0">
            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://php.zone/" title="PHP.Zone">
                <strong><span style="color: #00B0F9">php</span><span style="color: #212121">.zone</span></strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto mrMenuLeftPc">
                    <li class="mr-2 nav-item active ">
                        <a class="nav-link" href="https://php.zone/">Статьи</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="https://php.zone/courses">Курсы</a>
                    </li>

                    <li class="mr-2 nav-item  dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Задачи
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="https://php.zone/problems">Алгоритмические задачи</a>
                            <a class="dropdown-item" href="https://php.zone/puzzles">Логические задачи</a>
                        </div>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="https://php.zone/code">Песочница</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="https://php.zone/tests">Тесты</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="https://php.zone/q-and-a">Q&amp;A</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="https://php.zone/job">Работа</a>
                    </li>

                    <li class="nav-item  dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Автор
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink2">

                            <a class="dropdown-item" href="https://php.zone/about">Как я стал программистом</a>
                            <a class="dropdown-item" href="https://php.zone/reviews">Отзывы учеников</a>
                            <a class="dropdown-item" href="https://php.zone/donate">Поддержать</a>
                            <a class="dropdown-item" href="https://php.zone/contacts">Контакты</a>

                        </div>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons float-right">
                    <li class=" nav-item">
                        <a class="nav-link" href="https://php.zone/search?searchid=2715247&amp;text=php&amp;web=0"><span
                                class="fa fa-search"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="https://php.zone/user/31437"><i id="scoreIcon"
                           class="fa fa-star-o font-weight-bold"></i>
                            <div id="userScore" style="display: inline-block">0</div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="https://php.zone/user/31437">Мой профиль</a>
                            <a class="dropdown-item" href="https://php.zone/subscriptions">Подписки</a>
                            <a class="dropdown-item" href="https://php.zone/user/logout">Выйти</a>
                        </div>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>

        </div>
    </nav>
    <!-- Navbar -->

</header>

<!--Main Navigation-->
<div style="text-align: center;margin-top:65px; width:100%;" class="showOnMobile">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <a onclick="yaCounter34416790.reachGoal('click-telegram-in-header')" class="btn btn-info btn-sm mx-0" style="font-size:large;width:100%" target="_blank" rel="nofollow" href="https://t.me/php_zone"><i class="fa fa-telegram fa-lg"></i> Чат в Telegram</a>
                <div class="card">
                    <a onclick="yaCounter34416790.reachGoal('click-telegram-in-header')" class="btn btn-elegant btn-sm mx-0" style="font-size:large;width:100%" target="_blank" rel="nofollow" href="https://t.me/+-ADYOGyUdWwyMTFi"><i class="fa fa-telegram fa-lg"></i> Премиум чат</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="width:100%;text-align: center;" class="showOnMobile">
    <div style="width:92%;margin-left:auto;margin-right:auto;">
        <div class="card red my-2">
            <!-- Content -->
            <div class="card-body text-white text-center">

                Задайте никнейм, чтобы скрыть свою почту! Это делается в
                <a class="white-text" style="text-decoration: underline" href="https://php.zone/user/31437/edit">профиле</a>.
            </div>
        </div>
    </div>
</div>

<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">
        <section>

@include('layouts.incs.left-sidebar')

@yield('content')

@include('layouts.incs.right-sidebar')

@include('layouts.incs.bottom-adds')

        </section>
    </div>
</main>

<!--Footer-->
<footer id="footer" class="page-footer mdb-color darken-2 mt-4 center-on-small-only">

    <!--Footer links-->
    <div class="container">
        <div class="row mt-4">
            <!--First column-->
            <div class="col-lg-3 col-md-6">
                <img src="%D0%92%D1%81%D1%91%20%D0%BE%20PHP%20-%20PHP.Zone_files/author.png" style="width: 140px;"
                     class="mb-4" alt="Артём Ивашкевич">
                <h5 class="title mb-3">
                    <strong>Об авторе</strong>
                </h5>
                <p>Если вам интересно узнать <br> как я стал программистом, <br>читайте <a
                        style="text-decoration: underline;" href="https://php.zone/about">вот эту</a> статью.</p>
            </div>
            <!--/.First column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Second column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title mb-3">
                    <a href="https://php.zone/courses">Курсы <span style="color: #2e3951">PHP</span></a>
                </h5>
                <ul>
                    <li>
                        <a href="https://php.zone/kurs-html-dlya-nachinayushih">Курс HTML для начинающих</a>
                    </li>
                    <li>
                        <a href="https://php.zone/kurs-php-dlya-nachinayushih">PHP для начинающих</a>
                    </li>
                    <li>
                        <a href="https://php.zone/php-i-mysql-s-nulya">Курс MySQL с нуля</a>
                    </li>
                    <li>
                        <a href="https://php.zone/oop-v-php-prodvinutyj-kurs">ООП в PHP</a>
                    </li>
                    <li>
                        <a href="https://php.zone/php-dlya-professionalov">PHP для профессионалов</a>
                    </li>
                    <li>
                        <a href="https://php.zone/symfony-course">Курс по Symfony</a>
                    </li>
                    <li>
                        <a href="https://php.zone/laravel-insides">Курс по Laravel</a>
                    </li>
                </ul>

                <h5 class="title mb-3 mt-4">
                    <strong>Тесты</strong>
                </h5>
                <ul>
                    <li><a href="https://php.zone/test-html">Тест по основам HTML</a></li>
                    <li><a href="https://php.zone/test-php">Тест по основам PHP</a></li>
                    <li><a href="https://php.zone/test-oop-v-php">Тест по ООП в PHP</a></li>
                    <li><a href="https://php.zone/test-mysql">Тест по основам MySQL</a></li>
                </ul>
            </div>
            <!--/.Second column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Third column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title mb-3">
                    <strong>Статьи</strong>
                </h5>
                <ul>
                    <li><a href="https://php.zone/rubric/backend">Backend</a></li>
                    <li><a href="https://php.zone/rubric/frontend">Frontend</a></li>
                    <li><a href="https://php.zone/rubric/opinions">Мнения</a></li>
                    <li><a href="https://php.zone/rubric/diy">DIY</a></li>
                    <li><a href="https://php.zone/rubric/tools">Инструменты</a></li>
                    <li><a href="https://php.zone/rubric/etc">Прочее</a></li>
                    <li><a href="https://php.zone/rubric/other">Другое</a></li>
                </ul>

                <h5 class="title mb-3 mt-4">
                    <strong>Разное</strong>
                </h5>
                <ul>
                    <li><a href="https://php.zone/code">Песочница</a></li>
                    <li><a href="https://php.zone/problems">Алгоритмические задачи</a></li>
                    <li><a href="https://php.zone/puzzles">Логические задачи</a></li>
                    <li><a href="https://php.zone/q-and-a">Вопросы и ответы</a></li>
                </ul>
            </div>
            <!--/.Third column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <ul>
                    <li><a href="https://php.zone/donate">Поддержать&nbsp;проект</a></li>
                    <li><a href="https://php.zone/contacts">Контакты</a></li>
                    <li><a href="https://php.zone/reviews">Отзывы учеников</a></li>
                    <li><a href="https://php.zone/rating">Рейтинг</a></li>
                    <li><a href="https://php.zone/privacy">Конфиденциальность</a></li>
                    <li><a href="https://php.zone/contract">Договор-оферта</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4 text-center">
        <a rel="nofollow" href="https://vk.com/php_zone" target="_blank">
            <i class="fa fa-vk mr-3"></i>
        </a>

        <a rel="nofollow" href="https://t.me/php_zone_chan" target="_blank">
            <i class="fa fa-telegram mr-3"></i>
        </a>

        <!--        <a rel="nofollow" href="https://www.facebook.com/php.zone.chan/" target="_blank">-->
        <!--            <i class="fa fa-facebook mr-3"></i>-->
        <!--        </a>-->

        <a rel="nofollow" href="https://twitter.com/php_zone_chan" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

        <a rel="nofollow" href="https://www.youtube.com/channel/UCXhQnwQUhGuz15pddQRW2-g" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>

        <a href="https://php.zone/feed" target="_blank">
            <i class="fa fa-rss mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center font-small">
        Самозанятый Ивашкевич&nbsp;А.В. ИНН&nbsp;543570142160 <br>
        © 2016-2024 PHP.Zone
        <br>


        <!-- Yandex.Metrika counter -->
        <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym(34416790, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true}); </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/34416790" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript> <!-- /Yandex.Metrika counter -->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-70299615-1', 'auto');
            ga('send', 'pageview');
        </script>

        <div class="footerPlaceForFixedBottom" style="display: none;"></div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<a style="background-color: rgb(0, 176, 249) !important; display: none;" title="Наверх" id="back-to-top" href="#"
   class="btn btn-primary" role="button" data-placement="left"><i class="fa fa-chevron-up"></i></a>

</body>
</html>
