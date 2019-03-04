<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function workorders()
    {
        return $this->belongsToMany(Workorder::class);
    }
}
