<?php

namespace Tests;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Symfony\Component\HttpFoundation\Response;

abstract class TestCase extends BaseTestCase
{
    protected function dispatch(Request $request): Response
    {
        [$container, $router, $request] = bootstrap($request);

        require __DIR__ . '/../src/App.php';

        return $router->dispatch($request);
    }
}
