<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeederTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testLinksTable()
    {
        $this->assertDatabaseHas('links', ['title' => 'dotdev.co']);

    }
}
