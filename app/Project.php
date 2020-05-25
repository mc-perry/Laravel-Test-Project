<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user()
    {
        // select * from user where project_id = pid
        return $this->belongsTo(User::class);
    }
}
