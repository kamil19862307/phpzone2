@extends('layouts.app')

@section('content')

    <div class="col-lg-8 col-md-9">


        <div class="card breadcrumbs">
            <div class="card-body">
                <a href="/">Статьи</a>
                <span class="mx-1 font-weight-light">/</span>
                <a href="/rubric/backend">Backend</a>

            </div>
        </div>

        <!--Card-->
        <div class="card mb-0">
            <!--Card content-->
            <article class="card-body pb-0">

                <div class="text-center">
                    <h1 class="h1 mb-4">
                        {{ $post->title }}
                    </h1>
                </div>

                <div class="text-center m-4">
                    <div>

                        <div class="mt-2">
                            <a href="/tag/php">#php</a>
                            <a href="/tag/rabbitmq">#rabbitmq</a>
                            <a href="/tag/очередь_сообщений">#очередь сообщений</a>
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
                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4731</span>
                        </div>
                        <div class="dark-grey-text mr-3" style="display: inline-block">
                            <a onclick="postRatingUp(1160)" class="postRatingUp text-primary" data-post-id="1160"><i
                                    class="fa fa-arrow-up postRatingUpArrow1160"></i></a>
                            <div class="postRating postRatingValue1160" data-post-id="1160"
                                 style="display: inline-block">+4
                            </div>
                            <a onclick="postRatingDown(1160)" class="postRatingDown text-primary" data-post-id="1160"><i
                                    class="fa fa-arrow-down postRatingDownArrow1160"></i></a>
                        </div>
                        <div style="display:inline-block;">
                            <a href="#comments"><i class="fa fa-comment"></i> 0</a>
                        </div>
                    </div>
                </div>

                <p>Давайте честно, проектировать надежные событийно-ориентированные системы сложно. Во-первых, ни один
                    брокер сообщений не гарантирует вам exactly-once доставку сообщения, и вам придется добиваться этого
                    собственными силами. Во-вторых, без хорошего понимания работы вашего брокера – а RabbitMQ – сложный
                    брокер – вы не сможете настроить надежную обработку сообщений. Кроме того, есть еще одно важное
                    свойство, проявляемое в событийно-ориентированных системах, которое не надо игнорировать, – это
                    порядок сообщений. События всегда происходят в определенном порядке и должны в том же порядке быть
                    обработаны консьюмерами, иначе ваша система может начать вести себя неожиданно. </p>
                <!--    -->
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

                <p>Как происходит так, что порядок сообщений может быть нарушен? Представим, что у нас большой поток
                    событий (пример из <a target="_blank" href="https://php.zone/post/rabbitmq">прошлой статьи</a>) и
                    сервис подписок, который выдает подписки на наш продукт, основываясь на событиях платежа. Чтобы
                    справляться с нагрузками, мы естественно поднимаем много консьюмеров. Это позволяет параллельно
                    обрабатывать большое количество событий, но приводит к проблеме несогласованности данных, потому что
                    нагрузка на консьюмеры может быть разной, как и обработка сообщений по длительности. По-другому это
                    называют гонкой данных: два консьюмера одновременно берут два противоречивых события (например,
                    события об успешном и отмененном платежах) и мы начинаем зависить от порядка их выполнения. Мы
                    хотим, чтобы событие об успешном платеже обработалось раньше, чем событие об отмененном, иначе мы
                    ошибочно выдадим подписку пользователю бесплатно.</p>
                <p>Первое, что приходит на ум: давайте запускать один консьюмер. В небольшой системе это было бы рабочим
                    решением (до поры, до времени), но не в нашей: мы должны уметь горизонтально масштабироваться.
                    Другой безумный вариант, который я встречал в интернете, предлагает создавать очередь на
                    пользователя. Разумеется, это совершенно нерабочий вариант, но в нем есть рациональное зерно, а
                    именно – мы должны масштабироваться не количеством консьюмеров, а количеством очередей. Осталось
                    придумать, как это сделать. И тут на помощь к нам приходят алгоритмы, а именно алгоритм <a
                        target="_blank" href="https://en.wikipedia.org/wiki/Consistent_hashing">согласованного
                        хэширования</a>. Это довольно популярный алгоритм, используемый в балансировке трафика, sticky
                    сессиях, различных структурах данных (например, <strong>map</strong> из go) и так далее. Суть
                    алгоритма заключается в поиске для заданного ключа определенного места из ограниченного числа
                    нод/бакетов/etc. На псевдоязыке его можно описать следующим образом:</p>
                <pre><code class="hljs">nodes = 10
key = "some key"
hash = hash(key)
hash % nodes</code></pre>
                <p>Таким образом, мы для одного и того же ключа всегда будем находить конкретную ноду. Кроме того, мы
                    всегда будем получать число в пределах десяти, благодаря делению по модулю. </p>
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                            <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                            <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                        </ul>
                        <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                    </div>
                </div>


                <p>И для RabbitMQ уже существует плагин, который добавляет новый тип обменника с поддержкой
                    согласованного хэширования.</p>
                <h2>Разворачиваем RabbitMQ</h2>
                <p>В этот раз нам понадобится написать Dockerfile, чтобы включить нужный нам плагин:</p>
                <pre><code class="hljs">FROM rabbitmq:3.11.6-management-alpine

RUN set eux; \
    rabbitmq-plugins enable --offline rabbitmq_consistent_hash_exchange</code></pre>
                <p>И конфигурация для docker-compose:</p>
                <div class="card rgba-blue-slight p-4 my-4">
                    <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                    <div>
                        <ul class="list-unstyled card-text font09">
                            <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                            <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                            <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                        </ul>
                        <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                    </div>
                </div>


                <pre><code class="hljs">version: '3.0'

services:
  rabbitmq:
    build:
      context: .
      dockerfile: Dockerfile
    restart: always
    environment:
      RABBITMQ_DEFAULT_USER: guest
      RABBITMQ_DEFAULT_PASS: guest
    ports:
      - "127.0.0.1:5673:5672"
      - "127.0.0.1:15673:15672"</code></pre>
                <h2>Описываем топологию</h2>
                <p>Клиент я буду использовать тот же самый, что был в прошлой статье, поэтому перейдем сразу к описанию
                    топологии:</p>
                <pre><code class="language-php">&lt;?php

declare(strict_types=1);

use Bunny\Client;

require_once __DIR__.'/vendor/autoload.php';

$bunny = new Client([
    'host'      =&gt; 'localhost:5673',
    'vhost'     =&gt; '/',
    'user'      =&gt; 'guest',
    'password'  =&gt; 'guest',
]);

$bunny-&gt;connect();

$channel = $bunny-&gt;channel();

$channel-&gt;exchangeDeclare('events', durable: true);
$channel-&gt;exchangeDeclare('subscriptions', exchangeType: 'x-consistent-hash', durable: true, arguments: [
    'hash-header' =&gt; 'x-message-id',
]);

$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.completed');
$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.canceled');
$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.refunded');

for ($i = 1; $i &lt;= 10; $i++) {
     $channel-&gt;queueDeclare("subscriptions.events.$i", durable: true);
     $channel-&gt;queueBind("subscriptions.events.$i", 'subscriptions', $i);
}</code></pre>
                <ol>
                    <li>Для начала мы создаем общий обменник для всех событий:</li>
                </ol>
                <pre><code class="hljs">$channel-&gt;exchangeDeclare('events', durable: true);</code></pre>
                <ol start="2">
                    <li>Создаем обменник со специальным типом <strong>x-consistent-hash</strong> и в аргументах
                        указываем ключ, на основе которого необходимо брать хэш-функцию. У нас это будет заголовок
                        <strong>x-message-id</strong>:
                    </li>
                </ol>
                <pre><code class="hljs">$channel-&gt;exchangeDeclare('subscriptions', exchangeType: 'x-consistent-hash', durable: true, arguments: [
    'hash-header' =&gt; 'x-message-id',
]);</code></pre>
                <ol start="3">
                    <li>Далее создаем биндинг нашего обменника к обменнику с событиями только по тем событиям, что
                        интересны нашему сервису подписок:
                    </li>
                </ol>
                <pre><code class="hljs">$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.completed');
$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.canceled');
$channel-&gt;exchangeBind('subscriptions', 'events', 'payment.refunded');</code></pre>
                <ol start="4">
                    <li>И в конце создаем 10 очередей к нашему обменнику:</li>
                </ol>
                <pre><code class="hljs">for ($i = 1; $i &lt;= 10; $i++) {
     $channel-&gt;queueDeclare("subscriptions.events.$i", durable: true);
     $channel-&gt;queueBind("subscriptions.events.$i", 'subscriptions', $i);
}</code></pre>
                <p>Посмотрим, что получилось с обменниками:</p>
                <p><a class="linkToImgInPost" target="_blank"
                      href="https://php.zone/uploads/img/20230126e37b1c332672e95f53c675c6703ef4785bd87c56a1752291d0d960824426edc7.png"><img
                            class="imgInPost"
                            src="https://php.zone/uploads/img/20230126e37b1c332672e95f53c675c6703ef4785bd87c56a1752291d0d960824426edc7.png"
                            alt="exchanges"/></a></p>
                <p>И очередями:<br/>
                    <a class="linkToImgInPost" target="_blank"
                       href="https://php.zone/uploads/img/20230126d3d29a5b085bd433c2b15c67b8a1d82fc7b5b3848c42df0f8f671da280bdfd15.png"><img
                            class="imgInPost"
                            src="https://php.zone/uploads/img/20230126d3d29a5b085bd433c2b15c67b8a1d82fc7b5b3848c42df0f8f671da280bdfd15.png"
                            alt="queues"/></a></p>
                <h2>Публикуем сообщения</h2>
                <p>Публиковать сообщения необходимо в обменник <strong>events</strong>, дальше оттуда сообщения
                    отправятся в зависимости от роутинг ключа в обменник <strong>subscriptions</strong>, откуда кролик
                    их распределит по очередям в зависимости от результата хэширования заголовка
                    <strong>x-message-id</strong>.</p>
                <pre><code class="language-php">&lt;?php

declare(strict_types=1);

use Bunny\Client;

require_once __DIR__.'/vendor/autoload.php';

$bunny = new Client([
    'host'      =&gt; 'localhost:5673',
    'vhost'     =&gt; '/',
    'user'      =&gt; 'guest',
    'password'  =&gt; 'guest',
]);

$bunny-&gt;connect();

$channel = $bunny-&gt;channel();

$channel-&gt;publish('{"id": 1}', headers: ['x-message-id' =&gt; 1], exchange: 'events', routingKey: 'payment.completed');
$channel-&gt;publish('{"id": 1}', headers: ['x-message-id' =&gt; 1], exchange: 'events', routingKey: 'payment.canceled');
$channel-&gt;publish('{"id": 1}', headers: ['x-message-id' =&gt; 1], exchange: 'events', routingKey: 'payment.refunded');

$channel-&gt;publish('{"id": 2}', headers: ['x-message-id' =&gt; 2], exchange: 'events', routingKey: 'payment.completed');
$channel-&gt;publish('{"id": 2}', headers: ['x-message-id' =&gt; 2], exchange: 'events', routingKey: 'payment.canceled');
$channel-&gt;publish('{"id": 2}', headers: ['x-message-id' =&gt; 2], exchange: 'events', routingKey: 'payment.refunded');</code></pre>
                <p>Посмотрим, что получилось в дашборде кролика:<br/>
                    <a class="linkToImgInPost" target="_blank"
                       href="https://php.zone/uploads/img/202301265f034dd7f89a7bb985280e006677bcc86ed3344277d0b6ccd0d68947779aa0a4.png"><img
                            class="imgInPost"
                            src="https://php.zone/uploads/img/202301265f034dd7f89a7bb985280e006677bcc86ed3344277d0b6ccd0d68947779aa0a4.png"
                            alt="consistent"/></a></p>
                <p>На первый взгляд, распределилось поровну, давайте посмотрим, так ли это:<br/>
                    <a class="linkToImgInPost" target="_blank"
                       href="https://php.zone/uploads/img/20230126a0396351b5b43294a4f0fc5e034e47929068bf60329c38fa35b9f0641858686d.png"><img
                            class="imgInPost"
                            src="https://php.zone/uploads/img/20230126a0396351b5b43294a4f0fc5e034e47929068bf60329c38fa35b9f0641858686d.png"
                            alt="queue"/></a></p>
                <p>Как видим, сообщения с одним <strong>x-message-id</strong> попали в одну очередь. Теперь мы можем
                    запускать по одному консьюмеру на очередь и быть уверены в порядке обработки наших сообщений. </p>
                <h2>Запускаем консьюмеры</h2>
                <p>Осталась последняя проблема: как гарантировать, что в один момент времени будет запущен только один
                    консьюмер? С одной стороны, ответ очевидный: просто не запускайте больше одного. С другой стороны,
                    об этом можно легко забыть или не знать, поэтому ограничивать надо гарантиями, а не
                    договоренностями. И на этот случай у RabbitMQ есть два способа:</p>
                <ol>
                    <li>Запустить консьюмер с флагом <strong>exclusive</strong>:</li>
                </ol>
                <pre><code class="hljs">$channel = $bunny-&gt;channel();

$channel-&gt;qos(0, 1);

$channel-&gt;run(function (\Bunny\Message $message, \Bunny\Channel $channel): void {
   //
}, 'subscriptions.events.1', exclusive: true);

$bunny-&gt;run();</code></pre>
                <p>В этом случае второй консьюмер получит ошибку <strong>ACCESS_REFUSED</strong>, и поэтому на стороне
                    приложения надо будет ее обработать, чтобы не войти в цикл попыток подключиться. </p>
                <ol start="2">
                    <li>Задекларировать очередь со специальным аргументом <strong>x-single-active-consumer</strong>:
                    </li>
                </ol>
                <pre><code class="language-php">$channel-&gt;queueDeclare('subscriptions.events.1', durable: true, arguments: [
    'x-single-active-consumer' =&gt; true,
]);</code></pre>
                <p>В этом случае RabbitMQ сам будет обрабатывать множественные подключения к одной очереди и будет
                    держать остальных консьюмеров подключенными, чтобы при падении первого сразу передать сообщения
                    другому. Но поскольку очереди в кролике иммутабельные, такой вариант не подходит, если очередь уже
                    была создана ранее. Также он не подойдет, если вам все же захочется потом запустить несколько
                    консьюмеров в случае аварийных ситуаций, поэтому я предпочитаю первый вариант. </p>
                <p>Таким образом, с помощью RabbitMQ мы обеспечили себе не только возможность горизонтально
                    масштабироваться, но и сохранять порядок сообщений. </p>
                <div id="share-buttons" class="text-center"><img class="m-5" style="max-width: 200px"
                                                                 src="https://php.zone/app/img/loader.gif"
                                                                 alt="loader"></div>

                <div class="text-center m-4">
                    <div>

                        <div class="mt-2">
                            <a href="/tag/php">#php</a>
                            <a href="/tag/rabbitmq">#rabbitmq</a>
                            <a href="/tag/очередь_сообщений">#очередь сообщений</a>
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
                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4731</span>
                        </div>
                        <div class="dark-grey-text mr-3" style="display: inline-block">
                            <a onclick="postRatingUp(1160)" class="postRatingUp text-primary" data-post-id="1160"><i
                                    class="fa fa-arrow-up postRatingUpArrow1160"></i></a>
                            <div class="postRating postRatingValue1160" data-post-id="1160"
                                 style="display: inline-block">+4
                            </div>
                            <a onclick="postRatingDown(1160)" class="postRatingDown text-primary" data-post-id="1160"><i
                                    class="fa fa-arrow-down postRatingDownArrow1160"></i></a>
                        </div>
                        <div style="display:inline-block;">
                            <a href="#comments"><i class="fa fa-comment"></i> 0</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        </div>
        <!--/.Card-->

@endsection
