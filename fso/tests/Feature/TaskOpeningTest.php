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
        $this->signIn();
        $wo = create('App\Workorder');
        $task = make('App\Task');

        $this->post($wo->path()."/tasks", $task->toArray());
        $response = $this->get('/workorders/'.$wo->id);
        $response->assertSee($task->description);





    }


}
