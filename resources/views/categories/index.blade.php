@extends('layouts.app')

@section('content')

    <!--Grid column-->
    <div class="col-lg-8 col-md-9 mb-4">
        <!--Section: Cards-->
        <section>

            <!--Section: Jumbotron-->
            <section class="card jimbotron ohMyJum">

                <!-- Content -->
                <div class="card-body text-white text-center pb-5 pt-4 px-5 my-1">

                    <div class="mb-2 font-weight-bold">
                        <h1 style="font-size: 3.53rem;display: inline;margin: 0; font-weight: 700!important;">php</h1>
                        <span
                            style="font-size: 3.53rem;display: inline;margin: 0; font-weight: 700!important;color: #212121">.zone</span>
                    </div>
                    <div class="mb-4" style="font-size: 1.07rem">
                        Сообщество PHP-разработчиков
                    </div>
                    <div class="mb-4">
                        <div class="text-justify" style="font-size: 0.95rem">
                            PHP - это скриптовый язык
                            программирования, который применим для широкого круга задач.
                            По скорости выполнения кода он
                            является одним из самых быстрых среди интерпретируемых языков
                            программирования.
                            PHP&nbsp;имеет большую
                            библиотеку встроенных функций для самых разных задач, особенно для
                            работы с базами данных, сетевыми соединениями и файлами, благодаря чему
                            PHP является самым популярным языком программирования при разработке
                            сайтов и других веб-приложений.
                            <span id="mainDescription" class="collapse">

                                На этом сайте вы можете бесплатно пройти
                                <a class="white-text"
                                    style="text-decoration: underline"
                                    href="https://php.zone/courses">курсы PHP
                                </a> - они являются одними из самых понятных и простых в русскоязычном интернете. По крайней мере, так говорят
                                <a class="white-text" style="text-decoration: underline"
                                   href="https://php.zone/reviews">ученики</a>.
                                Помимо этого у нас
                                приветствуется обмен знаниями среди участников сообщества - можно
                                публиковать статьи о разработке на PHP, помогать другим участникам в
                                Q&amp;A, вести умные беседы в Telegram - не&nbsp;забудьте вступить в наш
                                уютный
                                <a class="white-text" style="text-decoration: underline"
                                              href="https://t.me/php_zone">чат PHP-разработчиков</a>.
                                                                    Наше сообщество состоит из
                                    множества людей с разным опытом и мировоззрением, у нас принято быть
                                    вежливыми. Оскорбление других участников - недопустимо.
                                                                    Если эти правила вам
                                    подходят - добро пожаловать в клуб!
                            </span>
                        </div>
                        <div id="mainDescriptionShow" style="display: inline-block;width: 100%" class="text-center">
                            <a onclick="$('#mainDescriptionShow').remove()" data-toggle="collapse"
                               data-target="#mainDescription" aria-expanded="false" aria-controls="mainDescription"><i
                                    class="fa fa-arrow-circle-down"></i> Показать больше <i
                                    class="fa fa-arrow-circle-down"></i></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-4 mx-auto" style="max-width: 650px">
                            <a class="btn btn-outline-white mb-2" href="https://php.zone/courses">Курсы
                                PHP-разработчиков <i class="fa fa-graduation-cap"></i></a>
                            <br>
                            <a class="btn btn-sm btn-white" href="https://php.zone/">Все статьи</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/backend"><i
                                    class="fa fa-hashtag"></i>Backend</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/frontend"><i
                                    class="fa fa-hashtag"></i>Frontend</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/opinions"><i
                                    class="fa fa-hashtag"></i>Мнения</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/diy"><i
                                    class="fa fa-hashtag"></i>DIY</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/tools"><i
                                    class="fa fa-hashtag"></i>Инструменты</a>
                            <a class="btn btn-sm btn-outline-white" href="https://php.zone/rubric/etc"><i
                                    class="fa fa-hashtag"></i>Прочее</a>
                        </div>
                        <a class="btn btn-outline-white" href="https://php.zone/post/offer-rules">Написать статью</a>
                        <a class="btn btn-outline-white" href="https://php.zone/post/offer-theme">Предложить тему</a>
                    </div>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->


            <div>

                    <!--Section: Cards-->
                    <section class="mx-1">

                        <div class="desktop-mx-5">
                            <!--Card content-->
                            <div class="">

                                <div class="media d-block d-md-flex hideOnMobile">
                                    <img src="/app/img/avatars/author.jpg" class="d-flex mb-3 mt-2 mx-auto" alt="Ивашкевич Артём" style="width: 200px;">
                                    <div class="media-body text-justify ml-md-5 ml-0">
                                        <p>Привет!<br>Меня зовут Артём Ивашкевич.</p><p>
                                            Я увлекаюсь программированием уже более 10&nbsp;лет. В&nbsp;данный момент я работаю PHP‑разработчиком в&nbsp;компании ВКонтакте.</p>
                                        <p>В свободное от работы время я пишу статьи о&nbsp;разработке и&nbsp;обучаю программированию других людей.
                                        </p><p>Если вам интересно узнать обо мне чуть больше, прочитайте историю <a target="_blank" href="/about">как я стал программистом</a>.</p>            </div>
                                </div>
                                <div class="showOnMobile">
                                    <div style="text-align: center">
                                        <div style="text-align:center;width:100%" class="mb-3">
                                            <img src="/app/img/avatars/author.jpg" style="max-width: 100%" alt="Артём Ивашкевич">
                                        </div>
                                    </div>
                                    <div class="text-justify">
                                        <p>Привет!<br>Меня зовут Артём Ивашкевич.</p><p>
                                            Я увлекаюсь программированием уже более 10&nbsp;лет. В&nbsp;данный момент я работаю PHP‑разработчиком в&nbsp;компании ВКонтакте.</p>
                                        <p>В свободное от работы время я пишу статьи о&nbsp;разработке и&nbsp;обучаю программированию других людей.
                                        </p><p>Если вам интересно узнать обо мне чуть больше, прочитайте историю <a target="_blank" href="/about">как я стал программистом</a>.</p>            </div>
                                </div>
                            </div>


                            <!-- Heading & Description -->
                            <div>
                                <!--Section description-->
                                <p class="text-justify">
                                    Если ваша цель - изучить <a style="color: #212529" href="/kurs-php-dlya-nachinayushih">PHP с нуля</a> до уровня Junior PHP Developer и&nbsp;устроиться на работу, я рекомендую
                                    вам пройти каждый из курсов, в порядке, представленном ниже.
                                </p><p class="text-justify">
                                    Я не советую пропускать какие-то из блоков обучения, даже если вы изучали их в составе других курсов PHP.
                                    К сожалению, как показывает практика, курсы от популярных и раскрученных онлайн-школ не содержат в полной мере знаний для успешного устройства на работу.
                                    Поэтому лучше перепройдите материал, который, как вам кажется, вы уже знаете.
                                </p><p class="text-justify">
                                    Обязательно выполняйте домашние задания, особенно на решение алгоритмических задач.
                                    Если сделаете как написано, через 3-4&nbsp;месяца вы будете готовы к прохождению собеседования. Желаю удачи!
                                </p>
                            </div>
                            <!-- Heading & Description -->

                        </div>
                        <div class="desktop-mx-4">
                            <hr class="my-5" id="coursesList">
                            @foreach($categories as $category)
                                <div class="row mt-3 ">
                                    <!--Grid column-->
                                    <div class="col-lg-5 col-xl-4 mb-4">
                                        <!--Featured image-->
                                        <div class="view overlay rounded z-depth-1">
                                            <img src="storage/images/category/{{ $category->thumbnail }}" class="img-fluid" alt="{{ $category->title }}">
                                            <a href="https://php.zone/kurs-html-dlya-nachinayushih">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4 pr-0">
                                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                                            <strong><a class="dark-grey-text" href="https://php.zone/kurs-html-dlya-nachinayushih">{{ $category->title }}</a></strong>
                                        </h3>
                                        <p class="desktop-text-justify">
                                            {{ Str::limit($category->description, 125, preserveWords: true) }}
                                        </p>
                                        <a href="{{ route('categories.show', $category->slug) }}"
                                           class="btn btn-primary btn-md">Перейти к курсу
                                            <i class="fa fa-play ml-2"></i>
                                        </a>
                                    </div>
                                    <!--Grid column-->
                                </div>
                            @endforeach

                            <hr class="mb-5">
                            <div class="mx-1 my-5">
                                <h2 class="text-center mb-4 h1">Дополнительные курсы</h2>
                                <div class="desktop-text-justify">
                                    В отличие от курсов, перечисленных выше, дополнительные курсы не являются обязательными для подготовки к трудоустройству в большинство компаний. Однако, их прохождение несомненно даст дополнительное преимущество как в понимании работы PHP, так и при прохождении собеседования (особенно курс по Symfony).
                                </div>
                            </div>
                            <hr class="mb-5">
                            <div class="row ">
                                <!--Grid column-->
                                <div class="col-lg-5 col-xl-4 mb-4">
                                    <!--Featured image-->
                                    <div class="view overlay rounded z-depth-1">
                                        <img src="https://php.zone/app/img/symfony-350x184.jpg" class="img-fluid" alt="Фреймворк Symfony 4">
                                        <a href="https://php.zone/symfony-course">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4 pr-0">
                                    <h3 class="mb-3 font-weight-bold dark-grey-text">
                                        <strong><a class="dark-grey-text" href="https://php.zone/symfony-course">Фреймворк Symfony 4</a></strong>
                                    </h3>
                                    <p class="desktop-text-justify">Учимся работать с самым востребованным на рынке PHP-фреймворком.</p>
                                    <a href="https://php.zone/symfony-course" class="btn btn-primary btn-md">Перейти
                                        к курсу
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                                <!--Grid column-->
                            </div>
                            <hr class="mb-5">
                            <div class="row ">
                                <!--Grid column-->
                                <div class="col-lg-5 col-xl-4 mb-4">
                                    <!--Featured image-->
                                    <div class="view overlay rounded z-depth-1">
                                        <img src="https://php.zone/app/img/laravel-350x184.jpg" class="img-fluid" alt="Фреймворк Laravel">
                                        <a href="https://php.zone/laravel-insides">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4 pr-0">
                                    <h3 class="mb-3 font-weight-bold dark-grey-text">
                                        <strong><a class="dark-grey-text" href="https://php.zone/laravel-insides">Фреймворк Laravel</a></strong>
                                    </h3>
                                    <p class="desktop-text-justify">Изучаем внутренности популярного PHP-фреймворка.</p>
                                    <a href="https://php.zone/laravel-insides" class="btn btn-primary btn-md">Перейти
                                        к курсу
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                                <!--Grid column-->
                            </div>
                            <hr class="mb-5">

                        </div>

                        <div class="desktop-mx-4">
                            <h2 class="h1 text-center mb-5">Почему сейчас нужны PHP-разработчики</h2>
                            <img alt="Преимущества PHP перед другими языками программирования" src="https://php.zone/uploads/img/20190728f699b4fe1e9adb3cb9a8cc9aad086bd040b2f23e6ea78a3f4ab822ad2fe4c2dc.jpg" style="max-width:100%" class="mb-4">
                            <p>Подавляющее большинство компаний в настоящее время рассматривают наличие собственного сайта как необходимое условие для развития и расширения бизнеса. Кроме того, большинство сфер нашей жизни стремительно автоматизируются, начиная с сервисов для доставки еды и заканчивая онлайн-сервисами банков.
                            </p>
                            <p>
                                Именно поэтому услуги PHP-разработчиков пользуются стабильно высоким спросом, а специалисты в данной сфере востребованы повсеместно. Сегодня PHP является одним из самых популярных и востребованных языков программирования. Он применяется для создания огромного количества интернет-ресурсов, включая популярные соцсети, блоги и популярные онлайн-сервисы.
                            </p>
                        </div>

                        <hr class="my-5 mx-4">

                        <div class="desktop-mx-4">
                            <h2 class="h1 text-center mb-5">Как проходят курсы PHP</h2>
                            <img alt="Детали о курсах PHP" src="https://php.zone/uploads/img/852d76d6b9532f39168641722ebeea01d4524b6398e32780ae32bf254deedd1d.jpg" style="max-width:100%" class="mb-4">
                            <p>Программа курсов PHP сформирована таким образом, чтобы обучение было доступно как абсолютным новичкам, так и людям, имеющим определенные знания и навыки в данной сфере. Материал разбит на уровни, а они в свою очередь на уроки, размещенные в порядке постепенного возрастания сложности. Курсы PHP представляют собой статьи, некоторые дополнены видеоуроками. Кроме того, получить ответы на интересующие вас вопросы можно в комментариях к уроку. В конце каждого занятия представлено домашнее задание, выполнение которого позволит закрепить полученные знания и отработать их практическое применение.
                            </p>
                            <p>Изучать темы можно в различной последовательности. Однако я рекомендую проходить уроки именно в том порядке, в котором они размещены на сайте. Так вам будет гораздо проще понять материал, не встречая на своём пути ещё не изученные темы.</p>
                        </div>

                        <hr class="my-5 mx-4">

                        <div class="desktop-mx-4">
                            <h2 class="h1 text-center mb-5">Какие преимущества наших курсов PHP</h2>
                            <img alt="Преимущества пройти курсы PHP у нас" src="https://php.zone/uploads/img/eecd4ccd5909ea8fdc664a1106273078f79c01960b27cd08117c34b21b1daa22.jpg" style="max-width:100%" class="mb-4">
                            <ul>
                                <li>Учиться по доступной цене. Я прекрасно знаю, что финансовые возможности большинства начинающих не позволяют тратить десятки тысяч рублей на курсы. Учиться на PHP.Zone может позволить себе любой человек, требуются лишь ваши желание и настойчивость.
                                </li>
                                <li>Получить знания для устройства на работу. Программа курсов PHP составлена программистами, зарабатывающими себе на жизнь профессиональной разработкой.
                                    Обучение ориентировано на получение реальных знаний, применяющихся в боевых условиях, а не заучивание никому не нужной теории.
                                </li>
                                <li>Проходить уроки в любые удобные для вас часы. Это позволяет наиболее эффективно распределять такой ограниченный ресурс, как время.</li>
                                <li>Приобретать новые знания в сфере создания сайтов без привязки к определенному месту. Вы имеете доступ к материалам, представленным на моем ресурсе, из любой точки где есть интернет.</li>
                            </ul>
                        </div>

                        <hr class="my-5 mx-4">


                    </section>
                    <!--Section: Cards-->


                <hr class="my-5">
                <div>
                    <a href="https://php.zone/post/rabbitmq-scaling-ordering">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Ныряем в кроличью нору: йинещбоос кодяроп меуритнараг</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Давайте
                            честно, проектировать надежные событийно-ориентированные системы
                            сложно. Во-первых, ни один брокер сообщений не гарантирует вам
                            exactly-once доставку сообщения, и вам придется добиваться этого
                            собственными силами. Во-вторых, без хорошего понимания работы вашего
                            брокера – а RabbitMQ – сложный брокер – вы не сможете настроить надежную
                            обработку сообщений. Кроме того, есть еще одно важное свойство,
                            проявляемое в событийно-ориентированных системах, которое не надо
                            игнорировать, – это порядок сообщений. События всегда происходят в
                            определенном порядке и должны в том же порядке быть обработаны
                            консьюмерами, иначе ваша система может начать вести себя неожиданно. </p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/rabbitmq-scaling-ordering" class="btn btn-primary btn-md">Читать
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
                                    <span class="dark-grey-text">26.01.2023 в 16:36</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 4714</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1160)" class="postRatingUp text-primary" data-post-id="1160"><i
                                        class="fa fa-arrow-up postRatingUpArrow1160"></i></a>
                                <div class="postRating postRatingValue1160" data-post-id="1160"
                                     style="display: inline-block">+4
                                </div>
                                <a onclick="postRatingDown(1160)" class="postRatingDown text-primary"
                                   data-post-id="1160"><i class="fa fa-arrow-down postRatingDownArrow1160"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/rabbitmq-scaling-ordering#comments"><i
                                        class="fa fa-comment"></i> 0</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="https://php.zone/problems">Алгоритмические
                            задачи</a></div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2"><a href="https://php.zone/problems/1">Привет, мир!</a></li>
                            <li class="mb-2"><a href="https://php.zone/problems/2">Развернуть строку</a></li>
                            <li class="mb-2"><a href="https://php.zone/problems/3">Чётные числа</a></li>
                            <li class="mb-2"><a href="https://php.zone/problems/4">Числа Фибоначчи</a></li>
                        </ul>
                        <a href="https://php.zone/problems" class="btn btn-sm btn-elegant shadow-none ml-0">Все
                            задачи</a>
                    </div>
                </div>
                <hr class="my-5">
                <div>

                    <a href="https://php.zone/post/rabbitmq">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Ныряем в кроличью нору</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>RabbitMQ
                            является чуть ли не самым популярным решением для реализации очередей
                            на сегодняшний день. И в то же время одним из самых сложных с точки
                            зрения разработки и эксплуатации. Если вы поищите статьи по теме, с
                            большой доли вероятности найдете материалы, в которых не погружаются
                            дальше декларации простой очереди и публикации и получения сообщений из
                            нее. И как только вы столкнетесь с проблемами, связанными с гарантиями
                            доставки, реализацией отложенных сообщений, переполнения очередей,
                            получения сообщений батчами, вам придется погрузиться в документацию или
                            книги в поисках ответов на эти вопросы. Данная статья целиком основана
                            на моем опыте работы с кроликом и содержит ответы на большинство
                            популярных задач, решаемых этим брокером очередей. Во всех примерах
                            будет использоваться PHP, однако то же самое почти с теми же терминами и
                            определениями можно сделать на любом другом языке программирования. </p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/rabbitmq" class="btn btn-primary btn-md">Читать далее
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
                                    <span class="dark-grey-text">08.01.2023 в 15:40</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 16092</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1159)" class="postRatingUp text-primary" data-post-id="1159"><i
                                        class="fa fa-arrow-up postRatingUpArrow1159"></i></a>
                                <div class="postRating postRatingValue1159" data-post-id="1159"
                                     style="display: inline-block">+12
                                </div>
                                <a onclick="postRatingDown(1159)" class="postRatingDown text-primary"
                                   data-post-id="1159"><i class="fa fa-arrow-down postRatingDownArrow1159"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/rabbitmq#comments"><i class="fa fa-comment"></i> 1</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div>

                    <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Мой долгий путь до PHP-разработчика</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Всем
                            привет, меня зовут Владимир я хотел бы рассказать как именно я стал
                            PHP-разработчиком, и в данный момент уже работаю около года. Так же хочу
                            рассказать насколько сильно мне помог курс на данном сайте, если что
                            извиняюсь за орфографию.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika" class="btn btn-primary btn-md">Читать
                        далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0">#работа</a>
                                <a href="https://php.zone/tag/junior">#junior</a>
                                <a href="https://php.zone/tag/%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE_%D0%BD%D0%B0_%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83">#устройство
                                    на работу</a>
                                <a href="https://php.zone/tag/%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B4%D0%BB%D1%8F_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D1%8E%D1%89%D0%B8%D1%85">#программирование
                                    для начинающих</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/8142">@Vladimir96</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">02.10.2022 в 15:08</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 4363</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1158)" class="postRatingUp text-primary" data-post-id="1158"><i
                                        class="fa fa-arrow-up postRatingUpArrow1158"></i></a>
                                <div class="postRating postRatingValue1158" data-post-id="1158"
                                     style="display: inline-block">+4
                                </div>
                                <a onclick="postRatingDown(1158)" class="postRatingDown text-primary"
                                   data-post-id="1158"><i class="fa fa-arrow-down postRatingDownArrow1158"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika#comments"><i
                                        class="fa fa-comment"></i> 5</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="https://php.zone/tests">Онлайн тесты</a>
                    </div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2"><a href="https://php.zone/test-html">Тест на знание основ HTML</a></li>
                            <li class="mb-2"><a href="https://php.zone/test-php">Тест на знание основ PHP</a></li>
                            <li class="mb-2"><a href="https://php.zone/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                        </ul>
                        <a href="https://php.zone/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                    </div>
                </div>

                <hr class="my-5">
                <div>

                    <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Как я устроился на работу PHP-разработчиком</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Всем привет! Хотелось бы поделиться своей историей
                            трудоустройства.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom"
                       class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0">#работа</a>
                                <a href="https://php.zone/tag/junior">#junior</a>
                                <a href="https://php.zone/tag/%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE_%D0%BD%D0%B0_%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83">#устройство
                                    на работу</a>
                                <a href="https://php.zone/tag/%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B4%D0%BB%D1%8F_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D1%8E%D1%89%D0%B8%D1%85">#программирование
                                    для начинающих</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/15521">@zick</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">16.06.2022 в 16:20</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 11019</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1157)" class="postRatingUp text-primary" data-post-id="1157"><i
                                        class="fa fa-arrow-up postRatingUpArrow1157"></i></a>
                                <div class="postRating postRatingValue1157" data-post-id="1157"
                                     style="display: inline-block">+3
                                </div>
                                <a onclick="postRatingDown(1157)" class="postRatingDown text-primary"
                                   data-post-id="1157"><i class="fa fa-arrow-down postRatingDownArrow1157"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom#comments"><i
                                        class="fa fa-comment"></i> 1</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div>

                    <a href="https://php.zone/post/staticheskiy-analiz-v-php">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Статический анализ в PHP</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Все
                            мы привыкли к определению, что PHP – это язык со слабой динамической
                            типизацией. В этом одновременно его преимущество и недостаток.
                            Преимущества заключаются в том, что вы имеете больше возможностей по
                            работе с динамическими данными: вызывать функции или объекты из строки,
                            передавать и возвращать <strong>mixed</strong> типы и многое другое. В
                            конце концов, только в PHP вы можете одновременно увидеть ужасные
                            реализации паттерна ActiceRecord с динамическими свойствами (которые
                            физически не определены в классе) и элегантные контейнеры внедрения
                            зависимостей, которые дают значительно больше возможностей, чем
                            аналогичные контейнеры в языках с сильной статической типизацией. Если
                            говорить о недостатках, то это, разумеется, баги, связанные как раз с
                            тем, что мы точно не знаем, что нам может вернуть, например, та же
                            анонимная функция, каких типов параметры она принимает, какие ключи есть
                            в массиве и так далее. По этой причине вам приходится обогащать свой
                            код проверками в духе <strong>isset($data['key'])</strong> и тому подобное.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/staticheskiy-analiz-v-php" class="btn btn-primary btn-md">Читать
                        далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/psalm">#psalm</a>
                                <a href="https://php.zone/tag/%D1%81%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7_%D0%BA%D0%BE%D0%B4%D0%B0">#статический
                                    анализ кода</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/4706">@lolychank</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">15.12.2021 в 18:11</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 7406</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1156)" class="postRatingUp text-primary" data-post-id="1156"><i
                                        class="fa fa-arrow-up postRatingUpArrow1156"></i></a>
                                <div class="postRating postRatingValue1156" data-post-id="1156"
                                     style="display: inline-block">+4
                                </div>
                                <a onclick="postRatingDown(1156)" class="postRatingDown text-primary"
                                   data-post-id="1156"><i class="fa fa-arrow-down postRatingDownArrow1156"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/staticheskiy-analiz-v-php#comments"><i
                                        class="fa fa-comment"></i> 3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="https://php.zone/courses">Онлайн
                            курсы</a></div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2"><a href="https://php.zone/kurs-html-dlya-nachinayushih">Курс HTML для
                                    начинающих</a></li>
                            <li class="mb-2"><a href="https://php.zone/kurs-php-dlya-nachinayushih">Курс PHP для
                                    начинающих</a></li>
                            <li class="mb-2"><a href="https://php.zone/php-i-mysql-s-nulya">Курс MySQL для
                                    начинающих</a></li>
                            <li class="mb-2"><a href="https://php.zone/oop-v-php-prodvinutyj-kurs">Курс ООП в PHP</a>
                            </li>
                        </ul>
                        <a href="https://php.zone/courses" class="btn btn-sm btn-elegant shadow-none ml-0">Все курсы</a>
                    </div>
                </div>
                <hr class="my-5">
                <div>

                    <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Как я устроился на работу после прохождения курса по PHP</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Я искал и изучал много материала в интернете. Проходил много
                            платных курсов.<br>
                            Я всегда хотел быть web разработчиком, работать с PHP, MySQL, JS, HTML,
                            CSS. В 2017 году Я купил курсы от geekbrains. Курсы неплохие, но, к
                            сожалению, особого результата мне не дали. Помогли закончить
                            университет, но не найти работу. Найти работу программиста - вот что мне
                            нужно было от курсов и обучения, платного и бесплатного в интернете.</p>
                        <p>Я смотрел много бесплатных уроков на Ютубе, скачивал их с торрента,
                            проходил курсы в html академии. 3-4 раза бросал, причем так, что как
                            будто навсегда. Наконец я решил сменить направления с фронтенд
                            разработки на бэкенд. Именно на фронтенд поначалу делал упор. На
                            очередном собеседовании мне сказали что для фронта ты знаешь мало, а
                            прошел я очень многое уже и фреймворки даже знал, сказали, посмотри в
                            сторону backend.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php"
                       class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0">#работа</a>
                                <a href="https://php.zone/tag/junior">#junior</a>
                                <a href="https://php.zone/tag/%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE_%D0%BD%D0%B0_%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83">#устройство
                                    на работу</a>
                                <a href="https://php.zone/tag/%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B4%D0%BB%D1%8F_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D1%8E%D1%89%D0%B8%D1%85">#программирование
                                    для начинающих</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/21427">@dronwrk1@bk.ru</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">09.12.2021 в 14:37</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 4923</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1155)" class="postRatingUp text-primary" data-post-id="1155"><i
                                        class="fa fa-arrow-up postRatingUpArrow1155"></i></a>
                                <div class="postRating postRatingValue1155" data-post-id="1155"
                                     style="display: inline-block">+6
                                </div>
                                <a onclick="postRatingDown(1155)" class="postRatingDown text-primary"
                                   data-post-id="1155"><i class="fa fa-arrow-down postRatingDownArrow1155"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php#comments"><i
                                        class="fa fa-comment"></i> 3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div>

                    <a href="https://php.zone/post/kphp-in-life">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Пробуем KPHP: реально ли его использовать в своих проектах</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>ВК
                            - крупнейшая социальная сеть в России. Её код изначально был написан на
                            PHP - языке, позволяющим быстро реализовывать функционал веб-сайтов.
                            Однако, PHP является интерпретируемым языком, что само собой не есть
                            хорошо для высоких нагрузок. </p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/kphp-in-life" class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/highload">#highload</a>
                                <a href="https://php.zone/tag/vk">#vk</a>
                                <a href="https://php.zone/tag/kphp">#kphp</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">25.08.2021 в 06:24</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 18343</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1154)" class="postRatingUp text-primary" data-post-id="1154"><i
                                        class="fa fa-arrow-up postRatingUpArrow1154"></i></a>
                                <div class="postRating postRatingValue1154" data-post-id="1154"
                                     style="display: inline-block">+11
                                </div>
                                <a onclick="postRatingDown(1154)" class="postRatingDown text-primary"
                                   data-post-id="1154"><i class="fa fa-arrow-down postRatingDownArrow1154"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/kphp-in-life#comments"><i class="fa fa-comment"></i>
                                    4</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div class="my-4 rgba-blue-slight" style="width: 100%;padding: 20px;text-align: center">
                    <div style="margin-bottom: 10px"><a onclick="yaCounter34416790.reachGoal('banner-forum')"
                                                        class="font11 text-black"
                                                        href="https://php.zone/post/offer-theme" target="_blank">Есть
                            вопрос по программированию?</a></div>
                    <div style="margin-bottom: 10px"><a onclick="yaCounter34416790.reachGoal('banner-forum')"
                                                        class="font09 text-black"
                                                        href="https://php.zone/post/offer-theme" target="_blank">Спроси
                            на форуме. Здесь ответят.</a></div>
                    <a onclick="yaCounter34416790.reachGoal('banner-forum')" target="_blank" rel="noopener noreferrer"
                       class="btn btn-elegant shadow-none btn-sm" href="https://php.zone/q-and-a">Создать тему</a>
                </div>
                <hr class="my-5">
                <div>

                    <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Как я применял курс ООП в PHP в реальной практике. Результат, выводы,
                                сравнения</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Вообще не люблю писать отзывы, ни хорошие, ни тем более плохие.
                            Но вам не могу не написать.</p>
                        <p>Наконец-то пройден ООП в PHP! Я давно задумал проект для внутренних
                            нужд своей компании. Не мог написать даже полурабочий прототип, все
                            чего-то не понимал, не хватало знаний. Проект получался сложный, все
                            время там что-то ломалось и т.д.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike"
                       class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/%D0%BE%D0%BE%D0%BF">#ооп</a>
                                <a href="https://php.zone/tag/%D0%BE%D1%82%D0%B7%D1%8B%D0%B2">#отзыв</a>
                                <a href="https://php.zone/tag/%D0%BA%D1%83%D1%80%D1%81%D1%8B">#курсы</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/15783">@ivan.tretiakov</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">06.07.2021 в 14:41</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 13056</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1151)" class="postRatingUp text-primary" data-post-id="1151"><i
                                        class="fa fa-arrow-up postRatingUpArrow1151"></i></a>
                                <div class="postRating postRatingValue1151" data-post-id="1151"
                                     style="display: inline-block">+9
                                </div>
                                <a onclick="postRatingDown(1151)" class="postRatingDown text-primary"
                                   data-post-id="1151"><i class="fa fa-arrow-down postRatingDownArrow1151"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike#comments"><i
                                        class="fa fa-comment"></i> 3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div>

                    <a href="https://php.zone/post/screen-v-linux">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Как запускать долгоживущие скрипты на удаленном сервере</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Зачастую
                            приходится на удаленном сервере запускать скрипты вручную. К примеру,
                            для миграции данных из одного хранилища в другое. Как обычно это
                            происходит: заходим на сервак по ssh, запускаем скрипт, он там нам
                            выводит какой-то прогресс (например, обработанные ID), после чего
                            завершается. Однако, часто бывает так, что нужно запустить долгоживущий
                            скрипт. Мне приходилось запускать скрипты, выполняющиеся несколько дней
                            подряд. При этом, нельзя гарантировать что ssh-соединение не разорвётся
                            из-за нестабильного интернета. И вот тут начинаются проблемы - мы можем
                            не узнать, что скрипт корректно завершил свою работу. Не можем узнать,
                            на каком ID он остановился, если произошла какая-то ошибка. О том, как
                            эту проблему решить, мы и поговорим в этой статье.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/screen-v-linux" class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/linux">#linux</a>
                                <a href="https://php.zone/tag/ssh">#ssh</a>
                                <a href="https://php.zone/tag/cli">#cli</a>
                                <a href="https://php.zone/tag/screen">#screen</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">24.06.2021 в 19:00</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 6554</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1150)" class="postRatingUp text-primary" data-post-id="1150"><i
                                        class="fa fa-arrow-up postRatingUpArrow1150"></i></a>
                                <div class="postRating postRatingValue1150" data-post-id="1150"
                                     style="display: inline-block">+5
                                </div>
                                <a onclick="postRatingDown(1150)" class="postRatingDown text-primary"
                                   data-post-id="1150"><i class="fa fa-arrow-down postRatingDownArrow1150"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/screen-v-linux#comments"><i class="fa fa-comment"></i> 4</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="https://php.zone/job">Новые вакансии</a>
                    </div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2">
                                <a href="https://php.zone/job/vacancies/84">Тестировщик веб-проектов <span class="">Зарплата договорная</span></a>
                            </li>
                            <li class="mb-2">
                                <a href="https://php.zone/job/vacancies/83">Backend разработчик в TravelTech стартап
                                    <span class="">От 150000₽</span></a>
                            </li>
                            <li class="mb-2">
                                <a href="https://php.zone/job/vacancies/82">Fullstack Developer <span class="">70000₽ - 300000₽</span></a>
                            </li>
                            <li class="mb-2">
                                <a href="https://php.zone/job/vacancies/81">PHP, Fullstack dev. (Part time проект) <span
                                        class="">10000₽ - 100000₽</span></a>
                            </li>
                            <li class="mb-2">
                                <a href="https://php.zone/job/vacancies/80">PHP developer Laravel <span class="">200000₽ - 250000₽</span></a>
                            </li>
                        </ul>
                        <a href="https://php.zone/job" class="btn btn-sm btn-elegant shadow-none ml-0">Все вакансии</a>
                        <a href="https://php.zone/job/vacancies/add"
                           class="btn btn-sm btn-outline-elegant shadow-none ml-0">Разместить вакансию бесплатно</a>
                    </div>
                </div>

                <hr class="my-5">
                <div>

                    <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php">
                        <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                            <strong>Как сделать уведомления в телеграм на PHP</strong>
                        </h3>
                    </a>

                    <div class="dark-grey-text mx-2"><p>Привет!
                            Сегодня поговорим о том, как можно отправить себе сообщение в
                            телеграмме с помощью PHP. Это удобно использовать, когда нужно получить
                            уведомление о каком-то событии, произошедшем на бэкенде. Например, я
                            таким образом получаю уведомления о новых комментариях к урокам.</p>
                        <p><!--more--></p></div>
                    <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php"
                       class="btn btn-primary btn-md">Читать далее
                        <i class="fa fa-book ml-2"></i>
                    </a>

                    <div class="m-2 mt-3">
                        <div>

                            <div class="mt-2">
                                <a href="https://php.zone/tag/php">#php</a>
                                <a href="https://php.zone/tag/telegram">#telegram</a>
                                <a href="https://php.zone/tag/notifications">#notifications</a>
                            </div>

                            <div class="mt-3">
                                <div class="mb-3" style="display:inline-block;">
                                    <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                </div>
                                <div class="mb-3" style="display:inline-block;">
                                    <span class="dark-grey-text">23.06.2021 в 20:08</span>
                                </div>
                            </div>

                            <div class="mr-3" style="display:inline-block;">
                                <span class="dark-grey-text"><i class="fa fa-eye"></i> 15762</span>
                            </div>
                            <div class="dark-grey-text mr-3" style="display: inline-block">
                                <a onclick="postRatingUp(1149)" class="postRatingUp text-primary" data-post-id="1149"><i
                                        class="fa fa-arrow-up postRatingUpArrow1149"></i></a>
                                <div class="postRating postRatingValue1149" data-post-id="1149"
                                     style="display: inline-block">+9
                                </div>
                                <a onclick="postRatingDown(1149)" class="postRatingDown text-primary"
                                   data-post-id="1149"><i class="fa fa-arrow-down postRatingDownArrow1149"></i></a>
                            </div>
                            <div style="display:inline-block;">
                                <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php#comments"><i
                                        class="fa fa-comment"></i> 3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
            </div>

            <nav aria-label="pagination">
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">← Назад</a></li>
                    <li class="page-item"><a class="page-link" href="https://php.zone/2">Далее →</a></li>
                </ul>
            </nav>
        </section>
        <!--Section: Cards-->
        <hr class="my-5">

        <div class="card readAlso">
            <h5 class="card-header">Реклама</h5>
            <div class="card-body pb-0">
                <div class="font09 mb-3">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/chto-nuzhno-uchityvat-pri-vyborje-nastolnogo-kompjutjera">
                        Что нужно учитывать при выборе
                        настольного компьютера? </a>
                </div>
                <div class="font09 mb-3">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/organizacija-sjetjevogo-kabjelja-v-sjervjernykh-shkafakh-sovjety-i-rjekomjendacii">
                        Организация сетевого кабеля в
                        серверных шкафах: советы и рекомендации
                    </a>
                </div>
                <div class="font09 mb-3">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/kak-poluchit-keys-v-ks-2">
                        Как Получить Кейс в КС 2 </a>
                </div>
                <div class="font09 mb-3">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/perspektivy-karernogo-rosta-programmista-php">
                        Перспективы карьерного роста программиста PHP </a>
                </div>
                <div class="font09 mb-3">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/dostupnye-sposoby-perenosa-dannyh-s-androida-na-android">
                        Доступные способы переноса
                        данных с Андроида на Андроид </a>
                </div>
                <div class="font09 ">
                    <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')"
                       href="https://php.zone/post/shreder-unichtozhitel-bumagi">
                        Шредер: уничтожитель бумаги </a>
                </div>
            </div>
        </div>

    </div>
    <!--Grid column-->

@endsection
