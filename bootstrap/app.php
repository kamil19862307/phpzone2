<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Перенаправлять гостей не по стандартному роуту а по нашему.
        $middleware->redirectGuestsTo(fn(\Illuminate\Http\Request $request) => route('admin.login'));
    })
//    ->withProviders()
//    ->withEvents()
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
