<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brief extends Model
{

    use SoftDeletes;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }


    public function skills()
    {
        return $this->belongsToMany('App\Skill','briefs_skills');
    }

    public function applications()
    {
        return $this->hasMany('App\Application');

    }


}
