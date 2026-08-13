<?php

namespace Tests\Unit;

use App\Models\Flight;
use Tests\TestCase;

class FlightTest extends TestCase
{
    public function test_uses_flights_table(): void
    {
        $flight = new Flight;

        $this->assertSame('flights', $flight->getTable());
    }

    public function test_name_is_fillable(): void
    {
        $flight = new Flight(['name' => 'AA1738']);

        $this->assertSame('AA1738', $flight->name);
    }
}
