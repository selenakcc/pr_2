<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function questionnaire(){
        return $this->belongsTo(Quesionnaire::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
