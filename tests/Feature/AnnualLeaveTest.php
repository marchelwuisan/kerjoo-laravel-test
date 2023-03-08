<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// Problem with the Factory and xdebug

class AnnualLeaveTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllLeave()
    {
        // $annualLeaves = factory(AnnualLeaves::class, 1)->create();
        // $this->assertTrue($annualLeaves);
        
        // $response = $this->get('/annual_leaves');
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    // public function testPostLeave()
    // {
    //     $response = $this->post('/annual_leaves');

    //     $response->assertStatus(200);
    // }
    // public function testGetLeave()
    // {
    //     $response = $this->get('/annual_leaves/1');

    //     $response->assertStatus(200);
    // }
}
