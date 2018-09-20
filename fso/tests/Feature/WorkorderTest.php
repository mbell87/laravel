<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class WorkorderTest extends TestCase
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
        $this->wo = create("App\WorkOrder");
    }

    /** @test */
    public function a_user_can_see_workorders()
    {

        $response = $this->get('/workorders');

        $response->assertSee($this->wo->name);


    }

    /** @test */
    public function a_user_can_see_a_workorder()
    {
        
        $response = $this->get('/workorders/'.$this->wo->id);

        $response->assertSee($this->wo->name);

    }

    /** @test */
    public function a_user_can_see_a_workorder_tasks()
    {
        $task = create("App\Task", ["workorder_id" =>$this->wo->id ]);
        $response = $this->get('/workorders/'.$this->wo->id);

        $response->assertSee($task->type);

    }


}
