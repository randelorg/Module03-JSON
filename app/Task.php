<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;

    public function  tasks(){
        return $this->hasOne(\App\Task::class);
    }
}
