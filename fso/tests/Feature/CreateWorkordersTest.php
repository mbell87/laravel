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
        $user = create('App\User');
        $this->be($user);
        $wo = create('App\Workorder');

        $this->post("/workorders", $wo->toArray());
        $response = $this->get("/workorders");
        $response->assertSee($wo->name);

    }

    /** @test */
    public function an_unauthenticated_user_cannot_create_workorder()
    {
        $this->withoutExceptionHandling();
        $this->expectException("Illuminate\Auth\AuthenticationException");
        $wo = create('App\Workorder');

        $this->post("/workorders", $wo->toArray());

    }

    /** @test */
    public function guests_cannot_see_create_wo()
    {
        $this->get("/workorders/create")
            ->assertRedirect('/login');

    }


}
