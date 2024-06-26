<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_about()
    {
        $response = $this->get('about');
        $response->assertStatus(200);
    }
}
