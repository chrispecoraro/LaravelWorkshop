<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $guarded = [];

    public function users(){
        $this->belongsToMany(User::class);
    }

}
