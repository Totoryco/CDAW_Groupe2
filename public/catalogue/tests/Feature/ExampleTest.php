<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //A partir d'ici, ce sont des tests
    /*
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    */
    /*
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $this->assertEquals('coucou', $response->getContent());
    }
    */
    public function testBasicTest2()
    {
        $response = $this->get('/');
        $response->assertViewHas('message', 'Vous y êtes !');
    }
}
