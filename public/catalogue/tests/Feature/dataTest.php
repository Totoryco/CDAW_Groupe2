<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class dataTest extends TestCase
{  
    public function testData()
    {
        $this->assertDatabaseHas('genres', [
            'name' => 'TestGenre'
    ]);
        
    }
    
    public function testData2()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'larson.serena@example.com'
    ]);
        
    }    
}
