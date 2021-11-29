<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function testView()
    {

        $view = $this->view('welcome');

        $view->assertSee('documentation');
        
    }

    public function testView2()
    {

        $view = $this->view('home');

        $view->assertSee('Anime');
        $view->assertSee('Search');
        $view->assertSee('Register');
        $view->assertSee('Login');
        
    }
    
}
