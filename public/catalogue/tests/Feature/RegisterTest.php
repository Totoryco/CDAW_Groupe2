<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    
    public function testRegistration()
    {
        /*
        $this->browse(function ($browser) {           
            $browser->visit('/register')              
                ->assertSee('Register')               
                ->type('firstname', 'First')
                ->type('lastname', 'Last') 
                ->type('pseudo', 'Pseudo')        
                ->type('email', 'FirstLast@gmail.com') 
                ->type('password', 'password') 
                ->type('password_confirmation', 'password')       
                ->press('Sign Up');                   
        });  
           
         $this->assertDatabaseHas('users', [
                 'email' => 'email@gmail.com'
         ]);
        */
    }
    
    
}
