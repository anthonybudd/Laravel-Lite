<?php

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ExampleModel;

// Example GET Request
$router->get('/', function () {
    $models = [
        new ExampleModel(['name' => 'AA1738']),
        new ExampleModel(['name' => 'BA1017']),
        new ExampleModel(['name' => 'UA420'])
    ];
    return new JsonResponse($models);
});

// Example POST Request
$router->post('/', function () {
    $request = Request::capture();

    $validator = Validator::make($request->all(), [
        'name' => 'required|string'
    ]);
    if ($validator->fails()) return new JsonResponse(['errors' => $validator->errors()], 422);

    $exampleModel = new ExampleModel(['name' => $request->get('name')]);
    return new JsonResponse($exampleModel);
});
