<?php

namespace Tests\Unit;

use App\Models\ExmapleModel;
use Tests\TestCase;

class ExmapleModelTest extends TestCase
{
    public function test_name_is_fillable(): void
    {
        $exmapleModel = new ExmapleModel(['name' => 'AA1738']);

        $this->assertSame('AA1738', $exmapleModel->name);
    }
}
