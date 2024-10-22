<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestBasic extends TestCase
{
    public function test_assert()
    {
        $this->assertTrue(true);
    }
}
