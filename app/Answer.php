<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
