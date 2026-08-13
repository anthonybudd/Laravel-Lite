<?php

use Illuminate\Routing\Contracts\ControllerDispatcher as ControllerDispatcherContract;
use Illuminate\Routing\Contracts\CallableDispatcher as CallableDispatcherContract;
use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Routing\ControllerDispatcher;
use Illuminate\Routing\CallableDispatcher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

function bootstrap(?Request $request = null): array
{
    $container = new Container;
    $request = $request ?? Request::capture();
    $container->instance('Illuminate\Http\Request', $request);
    $container->singleton(CallableDispatcherContract::class, fn ($app) => new CallableDispatcher($app));
    $container->singleton(ControllerDispatcherContract::class, fn ($app) => new ControllerDispatcher($app));
    $container->singleton('translator', fn () => new Translator(new ArrayLoader, 'en'));
    $container->singleton('validator', fn ($app) => new ValidationFactory($app['translator'], $app));

    if (! class_exists('Validator', false)) {
        class_alias(\Illuminate\Support\Facades\Validator::class, 'Validator');
    }

    if (! class_exists('Facade', false)) {
        class_alias(\Illuminate\Support\Facades\Facade::class, 'Facade');
    }

    \Facade::setFacadeApplication($container);

    $router = new Router(new Dispatcher($container), $container);

    return [$container, $router, $request];
}
