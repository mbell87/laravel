<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoic extends Model
{
    public function workorders()
    {
        return $this->belongsToMany(Workorder::class);
    }
}
