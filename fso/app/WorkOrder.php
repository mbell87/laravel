<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "/workorders/" .$this->id;
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, "workorder_id");
    }

    public function addTask($reply)
    {
        $this->tasks()->create($reply);
    }
}
