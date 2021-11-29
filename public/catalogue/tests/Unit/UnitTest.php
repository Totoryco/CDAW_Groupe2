<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Str;


class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //A partir d'ici, ce sont des tests
    
    public function test_example()
    {
        $this->assertTrue(true);
    }
    

    public function testBasicTest()
    {
        $data = [10, 20, 30];
        $result = array_sum($data);
        $this->assertEquals(60, $result);
    }

    public function testBasicTest2()
    {
        $data = 'Je suis petit';
        $this->assertTrue(Str::startsWith($data, 'Je'));
        $this->assertFalse(Str::startsWith($data, 'Tu'));
        $this->assertSame(Str::startsWith($data, 'Tu'), false);
        $this->assertStringStartsWith('Je', $data);
        $this->assertStringEndsWith('petit', $data);
    }
}
