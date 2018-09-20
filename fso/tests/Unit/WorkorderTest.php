<?php

namespace Tests\Unit;

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
    }

    /** @test */
    public function a_wo_has_a_user()
    {

        $task = factory('App\WorkOrder')->create();

        $this->assertInstanceOf('App\User', $task->employee);

    }

    public function a_wo_has_a_type()
    {

        $task = factory('App\WorkOrder')->create();

        $this->assertInstanceOf('App\WOType', $task->type);

    }



}
