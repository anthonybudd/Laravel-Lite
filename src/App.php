<?php

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Flight;

// Exmaple GET Request
$router->get('/', function () {
    $flights = [
        new Flight(['name' => 'AA1738']),
        new Flight(['name' => 'BA1017']),
        new Flight(['name' => 'UA420'])
    ];
    return new JsonResponse($flights);
});

// Exmaple POST Request
$router->post('/', function () {
    $request = Request::capture();

    $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
        'name' => 'required|string'
    ]);
    if ($validator->fails()) return new JsonResponse(['errors' => $validator->errors()], 422);

    $flightName = $request->get('name');
    $flight = new Flight(['name' => $flightName]);
    return new JsonResponse($flight);
});
