<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testinformacion2()
    {
      $this->visit(‘ / ’)
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
