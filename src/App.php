<?php

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ExmapleModel;

// Exmaple GET Request
$router->get('/', function () {
    $models = [
        new ExmapleModel(['name' => 'AA1738']),
        new ExmapleModel(['name' => 'BA1017']),
        new ExmapleModel(['name' => 'UA420'])
    ];
    return new JsonResponse($models);
});

// Exmaple POST Request
$router->post('/', function () {
    $request = Request::capture();

    $validator = Validator::make($request->all(), [
        'name' => 'required|string'
    ]);
    if ($validator->fails()) return new JsonResponse(['errors' => $validator->errors()], 422);

    $name = $request->get('name');
    $exmapleModel = new ExmapleModel(['name' => $name]);
    return new JsonResponse($exmapleModel);
});
