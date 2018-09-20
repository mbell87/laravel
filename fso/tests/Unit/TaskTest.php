<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class TaskTest extends TestCase
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
    public function a_task_has_a_user()
    {

        $task = factory('App\Task')->create();

        $this->assertInstanceOf('App\User', $task->employee);


    }



}
