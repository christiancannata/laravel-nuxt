<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany('App\User','users_skills');
    }

}
