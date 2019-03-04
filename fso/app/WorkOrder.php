<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    protected $guarded = [];

    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }


    public function path()
    {
        return "/workorders/" .$this->id;
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, "workorder_id");
    }

    public function employee()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function type()
    {
        return $this->belongsTo(WOType::class, "wo_type_id");
    }

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id");
    }

    public function callType()
    {
        return $this->belongsTo(CallType::class, "call_type_id");
    }

    public function woType()
    {
        return $this->belongsTo(WorkorderType::class, "wo_type_id");
    }



    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
