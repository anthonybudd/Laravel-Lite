<?php

namespace Tests\Feature;

use Illuminate\Http\Request;
use Tests\TestCase;

class FlightRoutesTest extends TestCase
{
    public function test_get_root_returns_flights(): void
    {
        $response = $this->dispatch(Request::create('/', 'GET'));

        $this->assertSame(200, $response->getStatusCode());

        $flights = json_decode($response->getContent(), true);

        $this->assertCount(3, $flights);
        $this->assertSame('AA1738', $flights[0]['name']);
        $this->assertSame('BA1017', $flights[1]['name']);
        $this->assertSame('UA420', $flights[2]['name']);
    }

    public function test_post_root_requires_name(): void
    {
        $response = $this->dispatch(Request::create('/', 'POST', []));

        $this->assertSame(422, $response->getStatusCode());

        $body = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('errors', $body);
        $this->assertArrayHasKey('name', $body['errors']);
    }
}
