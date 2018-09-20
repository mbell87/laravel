<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class TaskOpeningTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function authenticated_user_can_open_task_on_workorder()
    {
        $user = factory('App\User')->create();
        $this->be($user);
        $wo = factory('App\WorkOrder')->create();
        $task = factory('App\Task')->make();

        $this->post($wo->path()."/tasks", $task->toArray());
        $response = $this->get($wo->path(), $task->toArray());
        $response->assertSee($task->type);





    }


}