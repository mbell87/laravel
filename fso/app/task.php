<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function employee()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function type()
    {
        return $this->belongsTo(TaskType::class, "type_id");
    }


}
