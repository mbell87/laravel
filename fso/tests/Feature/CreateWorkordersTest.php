<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateWorkordersTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function an_authenticated_user_can_create_workorder()
    {
        $user = factory('App\User')->create();
        $this->be($user);
        $wo = factory('App\WorkOrder')->create();

        $this->post("/workorders", $wo->toArray());
        $response = $this->get("/workorders");
        $response->assertSee($wo->name);

    }

    /** @test */
    public function an_unauthenticated_user_cannot_create_workorder()
    {
        $this->expectException("Illuminate\Auth\AuthenticationException");
        $wo = factory('App\WorkOrder')->create();

        $this->post("/workorders", $wo->toArray());

    }

}
