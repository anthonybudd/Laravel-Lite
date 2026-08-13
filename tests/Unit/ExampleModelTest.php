<?php

namespace Tests\Unit;

use App\Models\ExampleModel;
use Tests\TestCase;

class ExampleModelTest extends TestCase
{
    public function test_name_is_fillable(): void
    {
        $exampleModel = new ExampleModel(['name' => 'AA1738']);

        $this->assertSame('AA1738', $exampleModel->name);
    }
}
