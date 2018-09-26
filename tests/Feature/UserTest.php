<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

	public function testBasicExample()
    {
    	$response = $this->get('/');
    	$this->assertTrue($response->getStatusCode() == 200);
        // $this->get('/')->assertSee('Laravel')->assertStatus(200);
    }

    public function testHahaha()
    {
        $this->get('/')->assertSee('Laravel')->assertStatus(200);
    }

    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->get('/')->assertSee('Laravel')->assertStatus(400);
    // }


    
}
