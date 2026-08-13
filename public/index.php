<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

[$container, $router, $request] = bootstrap();
require_once __DIR__ . '/../src/App.php';
$response = $router->dispatch($request);
$response->send();
