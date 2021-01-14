<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TennisCourtTest extends TestCase
{
    private $headers; // Auth/headers


    protected function setUp() : void 
    {

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function tearDown() : void 
    {

    }
}
